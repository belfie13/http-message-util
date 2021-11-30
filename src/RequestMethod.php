<?php

namespace Fig\Http\Message;

/**
 * Defines cases for common HTTP request methods.
 */
enum RequestMethod: string
{
    case HEAD    = 'HEAD';
    case GET     = 'GET';
    case POST    = 'POST';
    case PUT     = 'PUT';
    case PATCH   = 'PATCH';
    case DELETE  = 'DELETE';
    case PURGE   = 'PURGE';
    case OPTIONS = 'OPTIONS';
    case TRACE   = 'TRACE';
    case CONNECT = 'CONNECT';
}
