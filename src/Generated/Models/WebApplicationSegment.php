<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WebApplicationSegment extends ApplicationSegment implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new webApplicationSegment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.webApplicationSegment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebApplicationSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebApplicationSegment {
        return new WebApplicationSegment();
    }

    /**
     * Gets the alternateUrl property value. If you're configuring a traffic manager in front of multiple App Proxy application segments, this property contains the user-friendly URL that will point to the traffic manager.
     * @return string|null
    */
    public function getAlternateUrl(): ?string {
        $val = $this->getBackingStore()->get('alternateUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternateUrl'");
    }

    /**
     * Gets the corsConfigurations property value. A collection of CORS Rule definitions for a particular application segment.
     * @return array<CorsConfiguration_v2>|null
    */
    public function getCorsConfigurations(): ?array {
        $val = $this->getBackingStore()->get('corsConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CorsConfiguration_v2::class);
            /** @var array<CorsConfiguration_v2>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'corsConfigurations'");
    }

    /**
     * Gets the externalUrl property value. The published external URL for the application segment; for example, https://intranet.contoso.com/.
     * @return string|null
    */
    public function getExternalUrl(): ?string {
        $val = $this->getBackingStore()->get('externalUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alternateUrl' => fn(ParseNode $n) => $o->setAlternateUrl($n->getStringValue()),
            'corsConfigurations' => fn(ParseNode $n) => $o->setCorsConfigurations($n->getCollectionOfObjectValues([CorsConfiguration_v2::class, 'createFromDiscriminatorValue'])),
            'externalUrl' => fn(ParseNode $n) => $o->setExternalUrl($n->getStringValue()),
            'internalUrl' => fn(ParseNode $n) => $o->setInternalUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the internalUrl property value. The internal URL of the application segment; for example, https://intranet/.
     * @return string|null
    */
    public function getInternalUrl(): ?string {
        $val = $this->getBackingStore()->get('internalUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internalUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('alternateUrl', $this->getAlternateUrl());
        $writer->writeCollectionOfObjectValues('corsConfigurations', $this->getCorsConfigurations());
        $writer->writeStringValue('externalUrl', $this->getExternalUrl());
        $writer->writeStringValue('internalUrl', $this->getInternalUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the alternateUrl property value. If you're configuring a traffic manager in front of multiple App Proxy application segments, this property contains the user-friendly URL that will point to the traffic manager.
     * @param string|null $value Value to set for the alternateUrl property.
    */
    public function setAlternateUrl(?string $value): void {
        $this->getBackingStore()->set('alternateUrl', $value);
    }

    /**
     * Sets the corsConfigurations property value. A collection of CORS Rule definitions for a particular application segment.
     * @param array<CorsConfiguration_v2>|null $value Value to set for the corsConfigurations property.
    */
    public function setCorsConfigurations(?array $value): void {
        $this->getBackingStore()->set('corsConfigurations', $value);
    }

    /**
     * Sets the externalUrl property value. The published external URL for the application segment; for example, https://intranet.contoso.com/.
     * @param string|null $value Value to set for the externalUrl property.
    */
    public function setExternalUrl(?string $value): void {
        $this->getBackingStore()->set('externalUrl', $value);
    }

    /**
     * Sets the internalUrl property value. The internal URL of the application segment; for example, https://intranet/.
     * @param string|null $value Value to set for the internalUrl property.
    */
    public function setInternalUrl(?string $value): void {
        $this->getBackingStore()->set('internalUrl', $value);
    }

}
