<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        return view('users', [
            'users' => $userModel->findAll(),
        ]);
    }

    public function new()
    {
        return view('users_new');
    }

    public function create()
    {
        $rules = [
            'username' => [
                'label' => 'Username',
                'rules' => 'required|max_length[50]|is_unique[users.username]',
            ],
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|max_length[100]',
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->to(site_url('users'))
            ->with('success', 'User account created successfully.');
    }

    public function edit(int $id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound(
                'User record not found.'
            );
        }

        return view('users_edit', [
            'user' => $user,
        ]);
    }

    public function update(int $id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        if ($user === null) {
            throw PageNotFoundException::forPageNotFound(
                'User record not found.'
            );
        }

        $rules = [
            'username' => [
                'label' => 'Username',
                'rules' => "required|max_length[50]|is_unique[users.username,id,{$id}]",
            ],
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|max_length[100]',
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $avatar = $this->request->getFile('avatar');
        $avatarFilename = $user['avatar'] ?? null;

        if ($avatar !== null && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
            $avatarRules = [
                'avatar' => [
                    'label' => 'Profile Picture',
                    'rules' => [
                        'uploaded[avatar]',
                        'max_size[avatar,2048]',
                        'is_image[avatar]',
                        'mime_in[avatar,image/jpeg,image/png]',
                        'ext_in[avatar,jpg,jpeg,png]',
                    ],
                ],
            ];

            if (! $this->validate($avatarRules)) {
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('errors', $this->validator->getErrors());
            }

            $avatarFilename = $avatar->getRandomName();

            $avatarDirectory = FCPATH . 'uploads/avatars/';

            if (! is_dir($avatarDirectory)) {
                mkdir($avatarDirectory, 0755, true);
            }

            service('image')
                ->withFile($avatar->getTempName())
                ->fit(300, 300, 'center')
                ->save($avatarDirectory . $avatarFilename, 85);
        }

        $userModel->update($id, [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'avatar'    => $avatarFilename,
        ]);

        return redirect()
            ->to(site_url('users'))
            ->with('success', 'User account updated successfully.');
    }
}