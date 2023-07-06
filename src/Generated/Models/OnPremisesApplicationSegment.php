<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnPremisesApplicationSegment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onPremisesApplicationSegment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesApplicationSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesApplicationSegment {
        return new OnPremisesApplicationSegment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the alternateUrl property value. If you're configuring a traffic manager in front of multiple App Proxy application segments, contains the user-friendly URL that will point to the traffic manager.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the corsConfigurations property value. CORS Rule definition for a particular application segment.
     * @return array<CorsConfiguration>|null
    */
    public function getCorsConfigurations(): ?array {
        $val = $this->getBackingStore()->get('corsConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CorsConfiguration::class);
            /** @var array<CorsConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'corsConfigurations'");
    }

    /**
     * Gets the externalUrl property value. The published external URL for the application segment; for example, https://intranet.contoso.com./
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
        return  [
            'alternateUrl' => fn(ParseNode $n) => $o->setAlternateUrl($n->getStringValue()),
            'corsConfigurations' => fn(ParseNode $n) => $o->setCorsConfigurations($n->getCollectionOfObjectValues([CorsConfiguration::class, 'createFromDiscriminatorValue'])),
            'externalUrl' => fn(ParseNode $n) => $o->setExternalUrl($n->getStringValue()),
            'internalUrl' => fn(ParseNode $n) => $o->setInternalUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alternateUrl', $this->getAlternateUrl());
        $writer->writeCollectionOfObjectValues('corsConfigurations', $this->getCorsConfigurations());
        $writer->writeStringValue('externalUrl', $this->getExternalUrl());
        $writer->writeStringValue('internalUrl', $this->getInternalUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alternateUrl property value. If you're configuring a traffic manager in front of multiple App Proxy application segments, contains the user-friendly URL that will point to the traffic manager.
     * @param string|null $value Value to set for the alternateUrl property.
    */
    public function setAlternateUrl(?string $value): void {
        $this->getBackingStore()->set('alternateUrl', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the corsConfigurations property value. CORS Rule definition for a particular application segment.
     * @param array<CorsConfiguration>|null $value Value to set for the corsConfigurations property.
    */
    public function setCorsConfigurations(?array $value): void {
        $this->getBackingStore()->set('corsConfigurations', $value);
    }

    /**
     * Sets the externalUrl property value. The published external URL for the application segment; for example, https://intranet.contoso.com./
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

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
