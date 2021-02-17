<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller
{
    const URL = 'http://moodle.localhost/webservice/rest/server.php';
    const TOKEN = '3937936535301e6d0044ea4f10adc33a';

    public function getUsers() {
        return Http::get(self::URL, [
            'wstoken' => self::TOKEN,
            'wsfunction' => 'local_test_get_users',
            'moodlewsrestformat' => 'json'
        ])->json();
    }

    public function getCourses() {
        return Http::get(self::URL, [
            'wstoken' => self::TOKEN,
            'wsfunction' => 'local_test_get_courses',
            'moodlewsrestformat' => 'json'
        ])->throw()->json();
    }

    public function getEnrolledUsers() {
        return Http::get(self::URL, [
            'wstoken' => self::TOKEN,
            'wsfunction' => 'local_test_get_enrolled_users',
            'moodlewsrestformat' => 'json'
        ])->throw()->json();
    }
}
