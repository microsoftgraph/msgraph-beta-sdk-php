<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HttpRequestEndpoint extends CustomExtensionEndpointConfiguration implements Parsable 
{
    /**
     * @var string|null $targetUrl The targetUrl property
    */
    private ?string $targetUrl = null;
    
    /**
     * Instantiates a new HttpRequestEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.httpRequestEndpoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HttpRequestEndpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HttpRequestEndpoint {
        return new HttpRequestEndpoint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetUrl' => function (ParseNode $n) use ($o) { $o->setTargetUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the targetUrl property value. The targetUrl property
     * @return string|null
    */
    public function getTargetUrl(): ?string {
        return $this->targetUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetUrl', $this->targetUrl);
    }

    /**
     * Sets the targetUrl property value. The targetUrl property
     *  @param string|null $value Value to set for the targetUrl property.
    */
    public function setTargetUrl(?string $value ): void {
        $this->targetUrl = $value;
    }

}
