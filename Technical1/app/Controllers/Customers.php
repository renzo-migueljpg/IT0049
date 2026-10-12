<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        return view('customers', [
            'customers' => $customerModel->findAll(),
        ]);
    }

    public function new()
    {
        return view('customers_new');
    }

    public function create()
    {
        $rules = [
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|max_length[100]',
            ],
            'email' => [
                'label' => 'Email Address',
                'rules' => 'required|valid_email|max_length[100]',
            ],
            'phone' => [
                'label' => 'Phone Number',
                'rules' => 'permit_empty|max_length[20]',
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $customerModel = new CustomerModel();

        $customerModel->insert([
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->to(site_url('customers'))
            ->with('success', 'Customer account created successfully.');
    }

    public function edit(int $id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if ($customer === null) {
            throw PageNotFoundException::forPageNotFound(
                'Customer record not found.'
            );
        }

        return view('customers_edit', [
            'customer' => $customer,
        ]);
    }

    public function update(int $id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if ($customer === null) {
            throw PageNotFoundException::forPageNotFound(
                'Customer record not found.'
            );
        }

        $rules = [
            'full_name' => [
                'label' => 'Full Name',
                'rules' => 'required|max_length[100]',
            ],
            'email' => [
                'label' => 'Email Address',
                'rules' => 'required|valid_email|max_length[100]',
            ],
            'phone' => [
                'label' => 'Phone Number',
                'rules' => 'permit_empty|max_length[20]',
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $customerModel->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone'),
        ]);

        return redirect()
            ->to(site_url('customers'))
            ->with('success', 'Customer account updated successfully.');
    }
}