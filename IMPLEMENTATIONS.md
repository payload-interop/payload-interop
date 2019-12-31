# Reference Implementations

- https://github.com/auraphp/Aura.Payload
- https://github.com/auraphp/Aura.Payload_Interface
- https://github.com/bitExpert/adrenaline/blob/master/src/bitExpert/Adrenaline/Domain/DomainPayload.php
- https://github.com/bitExpert/adroit/blob/master/src/bitExpert/Adroit/Domain/Payload.php
- https://github.com/dashifen/domain/tree/master/src/Payload
- https://github.com/equip/adr/blob/master/src/PayloadInterface.php
- https://github.com/geggleto/Payload/blob/master/src/Payload.php
- https://github.com/JoeBengalen/Payload
- https://github.com/perfect-oblivion/payload
- https://github.com/priskz/payload

## Reading Implementation Methods

### Aura

```
getStatus() : mixed
getInput() : mixed
getOutput() : mixed
getMessages() : mixed
getExtras() : mixed
```

### Adroit/Adrenaline

```
getType() : string
getValue($key, $default = null) : mixed
getValues() : array
getStatus() : mixed
JsonSerializable
```

### JoeBengalen

```
getStatus() : ?mixed
getMessage() : ?string
getInput() : ?mixed
getOutput() : ?mixed
```

### Dashifen

```
getType() : string
getSuccess() : bool
getDatum(string $index, $default = null) : ?mixed
getData() : array
reset() : void
```

### Equip

```
getStatus() : string
getInput() : array
getOutput() : array
getMessages() : array
getSetting(string $name) : mixed
getSettings() : array
```

### Geggleto

```
getStatus() : string
getData() : array
```

### PerfectOblivion

```
getStatus() : int
getMessages() : array
getOutput() : array
```

### Summary of Reading Methods

```
getData() : array
getData() : array

getDatum(string $index, $default = null) : ?mixed

getExtras() : mixed

getInput() : ?mixed
getInput() : array
getInput() : mixed

getMessage() : ?string
getMessages() : array
getMessages() : array
getMessages() : mixed

getOutput() : ?mixed
getOutput() : array
getOutput() : array
getOutput() : mixed

getSetting(string $name) : mixed
getSettings() : array

getStatus() : ?mixed
getStatus() : int
getStatus() : mixed
getStatus() : mixed
getStatus() : string
getStatus() : string

getSuccess() : bool

getType() : string
getType() : string

getValue($key, $default = null) : mixed
getValues() : array

reset() : void
```


## Implementation Status Values

All status values appear to be constants, either integer or string.

### https://github.com/auraphp/Aura.Payload

None.

### https://github.com/auraphp/Aura.Payload_Interface

PayloadStatus class:

```php
    /** A command/query was accepted for later processing. */
    const ACCEPTED = 'ACCEPTED';

    /** User is authenticated. */
    const AUTHENTICATED = 'AUTHENTICATED';

    /** User is authorized. */
    const AUTHORIZED = 'AUTHORIZED';

    /** A creation command succeeded. */
    const CREATED = 'CREATED';

    /** A deletion command succeeded. */
    const DELETED = 'DELETED';

    /** There was a major error of some sort. */
    const ERROR = 'ERROR';

    /** There was a failure of some sort. */
    const FAILURE = 'FAILURE';

    /** A query successfully returned results. */
    const FOUND = 'FOUND';

    /** A command/query was not accepted for processing. */
    const NOT_ACCEPTED = 'NOT_ACCEPTED';

    /** User is not authenticated. */
    const NOT_AUTHENTICATED = 'NOT_AUTHENTICATED';

    /** User is not authorized. */
    const NOT_AUTHORIZED = 'NOT_AUTHORIZED';

    /** A creation command failed. */
    const NOT_CREATED = 'NOT_CREATED';

    /** A deletion command failed. */
    const NOT_DELETED = 'NOT_DELETED';

    /** A query failed to return results. */
    const NOT_FOUND = 'NOT_FOUND';

    /** An update command failed. */
    const NOT_UPDATED = 'NOT_UPDATED';

    /** User input was not valid. */
    const NOT_VALID = 'NOT_VALID';

    /** A command/query is in-process but not finished. */
    const PROCESSING = 'PROCESSING';

    /** There was a success of some sort (generic). */
    const SUCCESS = 'SUCCESS';

    /** An update command succeeded. */
    const UPDATED = 'UPDATED';

    /** User input was valid. */
    const VALID = 'VALID';
```


### https://github.com/bitExpert/adrenaline/blob/master/src/bitExpert/Adrenaline/Domain/DomainPayload.php

Arbitrary $type.


### https://github.com/bitExpert/adroit/blob/master/src/bitExpert/Adroit/Domain/Payload.php

Arbitrary type.


### https://github.com/dashifen/domain/tree/master/src/Payload

Typed by class, CRUDEO:

- CreatePayload
- DeletePayload
- EmptyPayload
- OtherPayload
- ReadPayload
- UpdatePayload


### https://github.com/equip/adr/blob/master/src/PayloadInterface.php

HTTP-based Status interface:

```php
    const STATUS_CONTINUE = 'Continue';
    const STATUS_SWITCHING_PROTOCOLS = 'Switching Protocols';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_OK = 'OK';
    const STATUS_CREATED = 'Created';
    const STATUS_ACCEPTED = 'Accepted';
    const STATUS_NON_AUTHORITATIVE_INFORMATION = 'Non-Authoritative Information';
    const STATUS_NO_CONTENT = 'No Content';
    const STATUS_RESET_CONTENT = 'Reset Content';
    const STATUS_PARTIAL_CONTENT = 'Partial Content';
    const STATUS_MULTI_STATUS = 'Multi-Status';
    const STATUS_ALREADY_REPORTED = 'Already Reported';
    const STATUS_IM_USED = 'IM Used';
    const STATUS_MULTIPLE_CHOICES = 'Multiple Choices';
    const STATUS_MOVED_PERMANENTLY = 'Moved Permanently';
    const STATUS_FOUND = 'Found';
    const STATUS_SEE_OTHER = 'See Other';
    const STATUS_NOT_MODIFIED = 'Not Modified';
    const STATUS_USE_PROXY = 'Use Proxy';
    const STATUS_TEMPORARY_REDIRECT = 'Temporary Redirect';
    const STATUS_PERMANENT_REDIRECT = 'Permanent Redirect';
    const STATUS_BAD_REQUEST = 'Bad Request';
    const STATUS_UNAUTHORIZED = 'Unauthorized';
    const STATUS_PAYMENT_REQUIRED = 'Payment Required';
    const STATUS_FORBIDDEN = 'Forbidden';
    const STATUS_NOT_FOUND = 'Not Found';
    const STATUS_METHOD_NOT_ALLOWED = 'Method Not Allowed';
    const STATUS_NOT_ACCEPTABLE = 'Not Acceptable';
    const STATUS_PROXY_AUTHENTICATION_REQUIRED = 'Proxy Authentication Required';
    const STATUS_REQUEST_TIMEOUT = 'Request Timeout';
    const STATUS_CONFLICT = 'Conflict';
    const STATUS_GONE = 'Gone';
    const STATUS_LENGTH_REQUIRED = 'Length Required';
    const STATUS_PRECONDITION_FAILED = 'Precondition Failed';
    const STATUS_PAYLOAD_TOO_LARGE = 'Payload Too Large';
    const STATUS_URI_TOO_LONG = 'URI Too Long';
    const STATUS_UNSUPPORTED_MEDIA_TYPE = 'Unsupported Media Type';
    const STATUS_RANGE_NOT_SATISFIABLE = 'Range Not Satisfiable';
    const STATUS_EXPECTATION_FAILED = 'Expectation Failed';
    const STATUS_IM_A_TEAPOT = "I'm a teapot";
    const STATUS_MISDIRECTED_REQUEST = 'Misdirected Request';
    const STATUS_UNPROCESSABLE_ENTITY = 'Unprocessable Entity';
    const STATUS_LOCKED = 'Locked';
    const STATUS_FAILED_DEPENDENCY = 'Failed Dependency';
    const STATUS_UPGRADE_REQUIRED = 'Upgrade Required';
    const STATUS_PRECONDITION_REQUIRED = 'Precondition Required';
    const STATUS_TOO_MANY_REQUESTS = 'Too Many Request';
    const STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE = 'Request Header Fields Too Large';
    const STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = 'Unavailable For Legal Reasons';
    const STATUS_INTERNAL_SERVER_ERROR = 'Internal Server Error';
    const STATUS_NOT_IMPLEMENTED = 'Not Implemented';
    const STATUS_BAD_GATEWAY = 'Bad Gateway';
    const STATUS_SERVICE_UNAVAILABLE = 'Service Unavailable';
    const STATUS_GATEWAY_TIMEOUT = 'Gateway Timeout';
    const STATUS_VERSION_NOT_SUPPORTED = 'HTTP Version Not Supported';
    const STATUS_VARIANT_ALSO_NEGOTIATES = 'Variant Also Negotiates';
    const STATUS_INSUFFICIENT_STORAGE = 'Insufficient Storage';
    const STATUS_LOOP_DETECTED = 'Loop Detected';
    const STATUS_NOT_EXTENDED = 'Not Extended';
    const STATUS_NETWORK_AUTHENTICATION_REQUIRED = 'Network Authentication Required';
```

### https://github.com/geggleto/Payload/blob/master/src/Payload.php

Payload constants:

```php
    const WARNING = "WARNING";
    const ERROR = "ERROR";
    const SUCCESS = "SUCCESS";
```


### https://github.com/JoeBengalen/Payload

Abstract PayloadStatus class:

```php
    /**
     * @var int Action succeeded.
     */
    const SUCCESS = 1;

    /**
     * @var int Requested data found.
     */
    const FOUND = 2;

    /**
     * @var int Requested data not found.
     */
    const NOT_FOUND = 3;

    /**
     * @var int Invalid input.
     */
    const INVALID = 4;

    /**
     * @var int Error during execution.
     */
    const ERROR = 5;
```

### https://github.com/perfect-oblivion/payload

HTTP-based Status interface:

```php
    const STATUS_CONTINUE = 100;                               // Continue
    const STATUS_SWITCHING_PROTOCOLS = 101;                    // Switching Protocols
    const STATUS_PROCESSING = 102;                             // Processing
    const STATUS_OK = 200;                                     // OK
    const STATUS_CREATED = 201;                                // Created
    const STATUS_ACCEPTED = 202;                               // Accepted
    const STATUS_NON_AUTHORITATIVE_INFORMATION = 203;          // Non-Authoritative Information
    const STATUS_NO_CONTENT = 204;                             // No Content
    const STATUS_RESET_CONTENT = 205;                          // Reset Content
    const STATUS_PARTIAL_CONTENT = 206;                        // Partial Content
    const STATUS_MULTI_STATUS = 207;                           // Multi-Status
    const STATUS_ALREADY_REPORTED = 208;                       // Already Reported
    const STATUS_IM_USED = 226;                                // IM Used
    const STATUS_MULTIPLE_CHOICES = 300;                       // Multiple Choices
    const STATUS_MOVED_PERMANENTLY = 301;                      // Moved Permanently
    const STATUS_FOUND = 302;                                  // Found
    const STATUS_SEE_OTHER = 303;                              // See Other
    const STATUS_NOT_MODIFIED = 304;                           // Not Modified
    const STATUS_USE_PROXY = 305;                              // Use Proxy
    const STATUS_TEMPORARY_REDIRECT = 307;                     // Temporary Redirect
    const STATUS_PERMANENT_REDIRECT = 308;                     // Permanent Redirect
    const STATUS_BAD_REQUEST = 400;                            // Bad Request
    const STATUS_UNAUTHORIZED = 401;                           // Unauthorized
    const STATUS_PAYMENT_REQUIRED = 402;                       // Payment Required
    const STATUS_FORBIDDEN = 403;                              // Forbidden
    const STATUS_NOT_FOUND = 404;                              // Not Found
    const STATUS_METHOD_NOT_ALLOWED = 405;                     // Method Not Allowed
    const STATUS_NOT_ACCEPTABLE = 406;                         // Not Acceptable
    const STATUS_PROXY_AUTHENTICATION_REQUIRED = 407;          // Proxy Authentication Required
    const STATUS_REQUEST_TIMEOUT = 408;                        // Request Timeout
    const STATUS_CONFLICT = 409;                               // Conflict
    const STATUS_GONE = 410;                                   // Gone
    const STATUS_LENGTH_REQUIRED = 411;                        // Length Required
    const STATUS_PRECONDITION_FAILED = 412;                    // Precondition Failed
    const STATUS_PAYLOAD_TOO_LARGE = 413;                      // Payload Too Large
    const STATUS_URI_TOO_LONG = 414;                           // URI Too Long
    const STATUS_UNSUPPORTED_MEDIA_TYPE = 415;                 // Unsupported Media Type
    const STATUS_RANGE_NOT_SATISFIABLE = 416;                  // Range Not Satisfiable
    const STATUS_EXPECTATION_FAILED = 417;                     // Expectation Failed
    const STATUS_IM_A_TEAPOT = 418;                            // I'm a teapot
    const STATUS_MISDIRECTED_REQUEST = 421;                    // Misdirected Request
    const STATUS_UNPROCESSABLE_ENTITY = 422;                   // Unprocessable Entity
    const STATUS_LOCKED = 423;                                 // Locked
    const STATUS_FAILED_DEPENDENCY = 424;                      // Failed Dependency
    const STATUS_UPGRADE_REQUIRED = 426;                       // Upgrade Required
    const STATUS_PRECONDITION_REQUIRED = 428;                  // Precondition Required
    const STATUS_TOO_MANY_REQUESTS = 429;                      // Too Many Requests
    const STATUS_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;        // Request Header Fields Too Large
    const STATUS_CONNECTION_CLOSED_WITHOUT_RESPONSE = 444;     // Connection Closed Without Response
    const STATUS_UNAVAILABLE_FOR_LEGAL_REASONS = 451;          // Unavailable For Legal Reasons
    const STATUS_CLIENT_CLOSED_REQUEST = 499;                  // Client Closed Request
    const STATUS_INTERNAL_SERVER_ERROR = 500;                  // Internal Server Error
    const STATUS_NOT_IMPLEMENTED = 501;                        // Not Implemented
    const STATUS_BAD_GATEWAY = 502;                            // Bad Gateway
    const STATUS_SERVICE_UNAVAILABLE = 503;                    // Service Unavailable
    const STATUS_GATEWAY_TIMEOUT = 504;                        // Gateway Timeout
    const STATUS_VERSION_NOT_SUPPORTED = 505;                  // HTTP Version Not Supported
    const STATUS_VARIANT_ALSO_NEGOTIATES = 506;                // Variant Also Negotiates
    const STATUS_INSUFFICIENT_STORAGE = 507;                   // Insufficient Storage
    const STATUS_LOOP_DETECTED = 508;                          // Loop Detected
    const STATUS_NOT_EXTENDED = 510;                           // Not Extended
    const STATUS_NETWORK_AUTHENTICATION_REQUIRED = 511;        // Network Authentication Required
    const STATUS_NETWORK_CONNECT_TIMEOUT_ERROR = 599;          // Network Connect Timeout Error
```

### https://github.com/priskz/payload

Payload interface:

```php
    const STATUS_VALID        = 'valid';
    const STATUS_INVALID      = 'invalid';
    const STATUS_CREATED      = 'created';
    const STATUS_UPDATED      = 'updated';
    const STATUS_DELETED      = 'deleted';
    const STATUS_FOUND        = 'found';
    const STATUS_NOT_FOUND    = 'not_found';
    const STATUS_EXCEPTION    = 'exception';
    const STATUS_UNAUTHORIZED = 'unauthorized';
```

After normalizing the constants, these are the usage counts (with synonyms grouped together).

### Frequency

#### 3+

```
ACCEPTED
ACCEPTED
ACCEPTED

CREATED
CREATED
CREATED
CREATED
CreatePayload

DELETED
DELETED
DeletePayload

ERROR
ERROR
ERROR

FOUND
FOUND
FOUND
FOUND
FOUND
ReadPayload

INVALID
INVALID
NOT_VALID

NOT_FOUND
NOT_FOUND
NOT_FOUND
NOT_FOUND
NOT_FOUND
EmptyPayload

PROCESSING
PROCESSING
PROCESSING

SUCCESS
SUCCESS
SUCCESS
OK
OK

UNAUTHORIZED
UNAUTHORIZED
UNAUTHORIZED
NOT_AUTHORIZED

UPDATED
UPDATED
UpdatePayload
```

#### 2

```
ALREADY_REPORTED
ALREADY_REPORTED

BAD_GATEWAY
BAD_GATEWAY

BAD_REQUEST
BAD_REQUEST

CONFLICT
CONFLICT

CONTINUE
CONTINUE

EXPECTATION_FAILED
EXPECTATION_FAILED

FAILED_DEPENDENCY
FAILED_DEPENDENCY

FORBIDDEN
FORBIDDEN

GATEWAY_TIMEOUT
GATEWAY_TIMEOUT

GONE
GONE

IM_A_TEAPOT
IM_A_TEAPOT

IM_USED
IM_USED

INSUFFICIENT_STORAGE
INSUFFICIENT_STORAGE

INTERNAL_SERVER_ERROR
INTERNAL_SERVER_ERROR

LENGTH_REQUIRED
LENGTH_REQUIRED

LOCKED
LOCKED

LOOP_DETECTED
LOOP_DETECTED

METHOD_NOT_ALLOWED
METHOD_NOT_ALLOWED

MISDIRECTED_REQUEST
MISDIRECTED_REQUEST

MOVED_PERMANENTLY
MOVED_PERMANENTLY

MULTI_STATUS
MULTI_STATUS

MULTIPLE_CHOICES
MULTIPLE_CHOICES

NETWORK_AUTHENTICATION_REQUIRED
NETWORK_AUTHENTICATION_REQUIRED

NOT_EXTENDED
NOT_EXTENDED

NOT_IMPLEMENTED
NOT_IMPLEMENTED

NOT_MODIFIED
NOT_MODIFIED

NO_CONTENT
NO_CONTENT

NON_AUTHORITATIVE_INFORMATION
NON_AUTHORITATIVE_INFORMATION

NOT_ACCEPTABLE
NOT_ACCEPTABLE

PARTIAL_CONTENT
PARTIAL_CONTENT

PAYLOAD_TOO_LARGE
PAYLOAD_TOO_LARGE

PAYMENT_REQUIRED
PAYMENT_REQUIRED

PERMANENT_REDIRECT
PERMANENT_REDIRECT

PRECONDITION_FAILED
PRECONDITION_FAILED

PRECONDITION_REQUIRED
PRECONDITION_REQUIRED

PROXY_AUTHENTICATION_REQUIRED
PROXY_AUTHENTICATION_REQUIRED

RANGE_NOT_SATISFIABLE
RANGE_NOT_SATISFIABLE

REQUEST_HEADER_FIELDS_TOO_LARGE
REQUEST_HEADER_FIELDS_TOO_LARGE

REQUEST_TIMEOUT
REQUEST_TIMEOUT

RESET_CONTENT
RESET_CONTENT

SEE_OTHER
SEE_OTHER

SERVICE_UNAVAILABLE
SERVICE_UNAVAILABLE

SWITCHING_PROTOCOLS
SWITCHING_PROTOCOLS

TEMPORARY_REDIRECT
TEMPORARY_REDIRECT

TOO_MANY_REQUESTS
TOO_MANY_REQUESTS

UNAVAILABLE_FOR_LEGAL_REASONS
UNAVAILABLE_FOR_LEGAL_REASONS

UNPROCESSABLE_ENTITY
UNPROCESSABLE_ENTITY

UNSUPPORTED_MEDIA_TYPE
UNSUPPORTED_MEDIA_TYPE

UPGRADE_REQUIRED
UPGRADE_REQUIRED

URI_TOO_LONG
URI_TOO_LONG

USE_PROXY
USE_PROXY

VALID
VALID

VARIANT_ALSO_NEGOTIATES
VARIANT_ALSO_NEGOTIATES

VERSION_NOT_SUPPORTED
VERSION_NOT_SUPPORTED
```

#### 1

```
AUTHENTICATED

AUTHORIZED

CLIENT_CLOSED_REQUEST

CONNECTION_CLOSED_WITHOUT_RESPONSE

EXCEPTION

FAILURE

NETWORK_CONNECT_TIMEOUT_ERROR

NOT_ACCEPTED

NOT_AUTHENTICATED

NOT_CREATED

NOT_DELETED

NOT_UPDATED

OtherPayload

WARNING
```
