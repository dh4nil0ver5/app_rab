<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'save/pekerjaan', 
        'update/pekerjaan',
        'delete/pekerjaan',
        // 
        'save/sub/pekerjaan',
        'update/sub/pekerjaan',
        'delete/sub/pekerjaan',
        //
        'save/item/pekerjaan', 
        'update/item/pekerjaan',
        'delete/item/pekerjaan',
        //
        'save/material/pekerjaan',
        'update/material/pekerjaan',
        'delete/material/pekerjaan',
        'update/material/category',
        //
        'save/category/pekerjaan',
        'update/category/pekerjaan',
        'delete/category/pekerjaan',
        //
        'save/formula/pekerjaan',
        'update/formula/pekerjaan',
        'delete/formula/pekerjaan',
        'update/margin',
        //
        'save/project',
        'ubah/project',
        'delete/project',
        // 
        'save/rab',
        'ubah/rab', 
        // 
        'save/activity',
        'ubah/activity', 
    ];
}
