<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Admin\Traits\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SendContactRequest;
use App\Mail\ContactMail;
use App\Models\Admin\Contact;
use App\Models\Admin\Faq;
use App\Models\Admin\Page;
use App\Traits\HasAjaxRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    use BaseController, HasAjaxRequest;
    public function index($slug)
    {
        $page = Page::getBySlug($slug);
        if (!$page) {
            return abort(404);
        }
        $args = [];
        $view = 'site.page.default';
        if ($page->template) {
            $view = 'site.page.'. $page->template;
        }
        if ($page->template == 'faq') {
            $args['faq'] = Faq::getList()->get();
        }

        return view($view, ['page' => $page, 'args' =>$args]);
    }

    public function sendContact(SendContactRequest $request)
    {
        $params = $request->all();
        $contact = Contact::storeUpdate($params, null, $request);
        Mail::to($contact->email)
            ->bcc('anpro9x12@gmail.com')
            ->send(new ContactMail($contact));
        return $this->ajaxSuccessResponse(
            ['url' => route('page.all', 'question')],
            'Cảm ơn bạn đã liên hệ với chúng tôi chúng tôi sẽ phản hồi lại bạn trong thời gian ngắn nhất !'
        );
    }
}
