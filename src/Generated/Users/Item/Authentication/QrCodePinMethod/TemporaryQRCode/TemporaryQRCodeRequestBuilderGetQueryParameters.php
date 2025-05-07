<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\QrCodePinMethod\TemporaryQRCode;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Temporary QR code has lifetime up to 12 hours. It can be issued when the user doesn't have access to their standard QR code. There can be only one active temporary QR code for the user.
*/
class TemporaryQRCodeRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new TemporaryQRCodeRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
