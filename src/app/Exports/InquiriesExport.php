<?php
namespace App\Exports;

use App\Models\Inquiry;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InquiriesExport implements FromView
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
        $query = Inquiry::query();

        if ($this->request->filled('name')) {
            $query->where('name', 'like', '%' . $this->request->name . '%');
        }
        if ($this->request->filled('email')) {
            $query->where('email', 'like', '%' . $this->request->email . '%');
        }
        if ($this->request->filled('gender') && $this->request->gender !== 'all') {
            $query->where('gender', $this->request->gender);
        }
        if ($this->request->filled('type')) {
            $query->where('type', $this->request->type);
        }
        if ($this->request->filled('date')) {
            $query->whereDate('created_at', $this->request->date);
        }

        return view('exports.inquiries', [
            'inquiries' => $query->get()
        ]);
    }
}
