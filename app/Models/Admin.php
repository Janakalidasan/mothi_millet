<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'adminprofile';
    protected $primaryKey = 'id';
    protected $fillable = ['admin_id','name','email','phone','dob','gender','image'];


    public static function GetUserData($fromDate, $toDate,$status = null)
    {
        $columns = ['id', 'name','email','password','phone','dob','gender','Address', 'created_at', 'updated_at']; // Specify your table columns here

        $iDisplayStart = request()->input('iDisplayStart', true);
        $iDisplayLength = request()->input('iDisplayLength', true);
        $iSortCol_0 = request()->input('iSortCol_0', true);
        $sSearch = request()->input('sSearch', true);
        $sEcho = request()->input('sEcho', true);

        // Building the query
        $query = DB::table('usertable');

        // Searching
        if (!empty($sSearch)) {
            $query->where(function ($q) use ($columns, $sSearch) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $sSearch . '%');
                }
            });
        }

        // Date Filtering
        if ($fromDate && $toDate) {
            $query->whereBetween('created_at', [$fromDate . ' 00:00:00', $toDate . ' 23:59:59']);
        }

        if ($status) {
            $query->where('status', $status);
        }
        // Total records before filtering
        $totalRecords = $query->count();

        // Ordering
        if (isset($iSortCol_0)) {
            $sortColumn = $columns[$iSortCol_0] ?? null;
            $sortDirection = request()->input('sSortDir_0', 'asc');
            if ($sortColumn) {
                $query->orderBy($sortColumn, $sortDirection);
            }
        }

        // Pagination
        if (isset($iDisplayStart) && $iDisplayLength != '-1') {
            $query->skip($iDisplayStart)->take($iDisplayLength);
        }

        // Fetch the records
        $records = $query->get();

        // Total records after filtering
        $totalDisplayRecords = $query->count();

        // Preparing the data for DataTables
        $data = [];
        foreach ($records as $record) {
            $rowData = [];
            foreach ($columns as $column) {
                $rowData[] = $record->$column;
            }
            $data[] = $rowData;
        }

        // Preparing output
        $output = [
            'sEcho' => intval($sEcho),
            'iTotalRecords' => $totalRecords,
            'iTotalDisplayRecords' => $totalDisplayRecords,
            'aaData' => $data
        ];

        return $output;
    }


    


    use HasFactory;
}

