<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'content', 'detail']);
        $category = Category::find($contact['content']);

        $categoryName = $category ? $category->content : '';
        return view('confirm', compact('contact', 'categoryName'));
    }

    public function store(ContactRequest $request)
    {
        $tel = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'address', 'building', 'content', 'detail']);

        $contact['tel'] = $tel;
        $contact['category_id'] = $request->input('content');
        Contact::create($contact);

        if ($request->input('action') === 'back'){
            return redirect('/')->withInput();
        }

        return view('thanks', compact('contact'));
    }
}
