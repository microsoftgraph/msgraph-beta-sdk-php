<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\DownloadAppDiagnostics;

use Microsoft\Graph\Beta\Generated\Models\PowerliftDownloadRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DownloadAppDiagnosticsPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PowerliftDownloadRequest|null $request The request property
    */
    private ?PowerliftDownloadRequest $request = null;
    
    /**
     * Instantiates a new downloadAppDiagnosticsPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DownloadAppDiagnosticsPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DownloadAppDiagnosticsPostRequestBody {
        return new DownloadAppDiagnosticsPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'request' => function (ParseNode $n) use ($o) { $o->setRequest($n->getObjectValue(array(PowerliftDownloadRequest::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the request property value. The request property
     * @return PowerliftDownloadRequest|null
    */
    public function getRequest(): ?PowerliftDownloadRequest {
        return $this->request;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('request', $this->request);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the request property value. The request property
     *  @param PowerliftDownloadRequest|null $value Value to set for the request property.
    */
    public function setRequest(?PowerliftDownloadRequest $value ): void {
        $this->request = $value;
    }

}
