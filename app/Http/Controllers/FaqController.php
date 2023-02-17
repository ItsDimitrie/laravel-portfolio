<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('faqs.index', ['faqs' => $faqs]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $faq = faq::find($id);

        return view('faqs.show', ['faq' => $faq]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $faq = new faq();

        $faq->question = request('question');

        $faq->answer = request('answer');

        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faqs.edit', ['faq' =>$faq]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->Question = request('question');

        $faq->Answer = request('answer');

        $faq->Link = request('link');

        $faq->save();

        return redirect('/faq/' . $faq->id);

    }

    public function destroy($id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        return redirect('/faq/');
    }
}
