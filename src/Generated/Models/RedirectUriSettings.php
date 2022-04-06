<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RedirectUriSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $index Identifies the specific URI within the redirectURIs collection in SAML SSO flows. Defaults to null. The index is unique across all the redirectUris for the application. */
    private ?int $index = null;
    
    /** @var string|null $uri Specifies the URI that tokens are sent to. */
    private ?string $uri = null;
    
    /**
     * Instantiates a new redirectUriSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RedirectUriSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RedirectUriSettings {
        return new RedirectUriSettings();
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
        return  [
            'index' => function (self $o, ParseNode $n) { $o->setIndex($n->getIntegerValue()); },
            'uri' => function (self $o, ParseNode $n) { $o->setUri($n->getStringValue()); },
        ];
    }

    /**
     * Gets the index property value. Identifies the specific URI within the redirectURIs collection in SAML SSO flows. Defaults to null. The index is unique across all the redirectUris for the application.
     * @return int|null
    */
    public function getIndex(): ?int {
        return $this->index;
    }

    /**
     * Gets the uri property value. Specifies the URI that tokens are sent to.
     * @return string|null
    */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('index', $this->index);
        $writer->writeStringValue('uri', $this->uri);
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
     * Sets the index property value. Identifies the specific URI within the redirectURIs collection in SAML SSO flows. Defaults to null. The index is unique across all the redirectUris for the application.
     *  @param int|null $value Value to set for the index property.
    */
    public function setIndex(?int $value ): void {
        $this->index = $value;
    }

    /**
     * Sets the uri property value. Specifies the URI that tokens are sent to.
     *  @param string|null $value Value to set for the uri property.
    */
    public function setUri(?string $value ): void {
        $this->uri = $value;
    }

}
