<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SessionMetadataInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SessionMetadataInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SessionMetadataInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SessionMetadataInfo {
        return new SessionMetadataInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the appHost property value. The appHost property
     * @return string|null
    */
    public function getAppHost(): ?string {
        $val = $this->getBackingStore()->get('appHost');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appHost'");
    }

    /**
     * Gets the appHostCategories property value. The appHostCategories property
     * @return array<string>|null
    */
    public function getAppHostCategories(): ?array {
        $val = $this->getBackingStore()->get('appHostCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appHostCategories'");
    }

    /**
     * Gets the appHostFqdn property value. The appHostFqdn property
     * @return string|null
    */
    public function getAppHostFqdn(): ?string {
        $val = $this->getBackingStore()->get('appHostFqdn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appHostFqdn'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        $val = $this->getBackingStore()->get('browser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browser'");
    }

    /**
     * Gets the browserVersion property value. The browserVersion property
     * @return string|null
    */
    public function getBrowserVersion(): ?string {
        $val = $this->getBackingStore()->get('browserVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browserVersion'");
    }

    /**
     * Gets the deviceManagementType property value. The deviceManagementType property
     * @return string|null
    */
    public function getDeviceManagementType(): ?string {
        $val = $this->getBackingStore()->get('deviceManagementType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementType'");
    }

    /**
     * Gets the deviceType property value. The deviceType property
     * @return string|null
    */
    public function getDeviceType(): ?string {
        $val = $this->getBackingStore()->get('deviceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceType'");
    }

    /**
     * Gets the enforcementPlane property value. The enforcementPlane property
     * @return string|null
    */
    public function getEnforcementPlane(): ?string {
        $val = $this->getBackingStore()->get('enforcementPlane');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementPlane'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appHost' => fn(ParseNode $n) => $o->setAppHost($n->getStringValue()),
            'appHostCategories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAppHostCategories($val);
            },
            'appHostFqdn' => fn(ParseNode $n) => $o->setAppHostFqdn($n->getStringValue()),
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'browserVersion' => fn(ParseNode $n) => $o->setBrowserVersion($n->getStringValue()),
            'deviceManagementType' => fn(ParseNode $n) => $o->setDeviceManagementType($n->getStringValue()),
            'deviceType' => fn(ParseNode $n) => $o->setDeviceType($n->getStringValue()),
            'enforcementPlane' => fn(ParseNode $n) => $o->setEnforcementPlane($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osPlatform' => fn(ParseNode $n) => $o->setOsPlatform($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
        ];
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
     * Gets the osPlatform property value. The osPlatform property
     * @return string|null
    */
    public function getOsPlatform(): ?string {
        $val = $this->getBackingStore()->get('osPlatform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osPlatform'");
    }

    /**
     * Gets the osVersion property value. The osVersion property
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appHost', $this->getAppHost());
        $writer->writeCollectionOfPrimitiveValues('appHostCategories', $this->getAppHostCategories());
        $writer->writeStringValue('appHostFqdn', $this->getAppHostFqdn());
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('browserVersion', $this->getBrowserVersion());
        $writer->writeStringValue('deviceManagementType', $this->getDeviceManagementType());
        $writer->writeStringValue('deviceType', $this->getDeviceType());
        $writer->writeStringValue('enforcementPlane', $this->getEnforcementPlane());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osPlatform', $this->getOsPlatform());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appHost property value. The appHost property
     * @param string|null $value Value to set for the appHost property.
    */
    public function setAppHost(?string $value): void {
        $this->getBackingStore()->set('appHost', $value);
    }

    /**
     * Sets the appHostCategories property value. The appHostCategories property
     * @param array<string>|null $value Value to set for the appHostCategories property.
    */
    public function setAppHostCategories(?array $value): void {
        $this->getBackingStore()->set('appHostCategories', $value);
    }

    /**
     * Sets the appHostFqdn property value. The appHostFqdn property
     * @param string|null $value Value to set for the appHostFqdn property.
    */
    public function setAppHostFqdn(?string $value): void {
        $this->getBackingStore()->set('appHostFqdn', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
    }

    /**
     * Sets the browserVersion property value. The browserVersion property
     * @param string|null $value Value to set for the browserVersion property.
    */
    public function setBrowserVersion(?string $value): void {
        $this->getBackingStore()->set('browserVersion', $value);
    }

    /**
     * Sets the deviceManagementType property value. The deviceManagementType property
     * @param string|null $value Value to set for the deviceManagementType property.
    */
    public function setDeviceManagementType(?string $value): void {
        $this->getBackingStore()->set('deviceManagementType', $value);
    }

    /**
     * Sets the deviceType property value. The deviceType property
     * @param string|null $value Value to set for the deviceType property.
    */
    public function setDeviceType(?string $value): void {
        $this->getBackingStore()->set('deviceType', $value);
    }

    /**
     * Sets the enforcementPlane property value. The enforcementPlane property
     * @param string|null $value Value to set for the enforcementPlane property.
    */
    public function setEnforcementPlane(?string $value): void {
        $this->getBackingStore()->set('enforcementPlane', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osPlatform property value. The osPlatform property
     * @param string|null $value Value to set for the osPlatform property.
    */
    public function setOsPlatform(?string $value): void {
        $this->getBackingStore()->set('osPlatform', $value);
    }

    /**
     * Sets the osVersion property value. The osVersion property
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

}
