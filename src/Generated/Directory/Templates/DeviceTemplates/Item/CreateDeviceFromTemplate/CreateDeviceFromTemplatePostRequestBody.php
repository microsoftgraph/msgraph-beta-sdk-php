<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\Templates\DeviceTemplates\Item\CreateDeviceFromTemplate;

use Microsoft\\Graph\\Beta\\Generated\Models\KeyCredential;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CreateDeviceFromTemplatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CreateDeviceFromTemplatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateDeviceFromTemplatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateDeviceFromTemplatePostRequestBody {
        return new CreateDeviceFromTemplatePostRequestBody();
    }

    /**
     * Gets the accountEnabled property value. The accountEnabled property
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        $val = $this->getBackingStore()->get('accountEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountEnabled'");
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
     * Gets the alternativeNames property value. The alternativeNames property
     * @return array<string>|null
    */
    public function getAlternativeNames(): ?array {
        $val = $this->getBackingStore()->get('alternativeNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternativeNames'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the externalDeviceId property value. The externalDeviceId property
     * @return string|null
    */
    public function getExternalDeviceId(): ?string {
        $val = $this->getBackingStore()->get('externalDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalDeviceId'");
    }

    /**
     * Gets the externalSourceName property value. The externalSourceName property
     * @return string|null
    */
    public function getExternalSourceName(): ?string {
        $val = $this->getBackingStore()->get('externalSourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalSourceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountEnabled' => fn(ParseNode $n) => $o->setAccountEnabled($n->getBooleanValue()),
            'alternativeNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlternativeNames($val);
            },
            'externalDeviceId' => fn(ParseNode $n) => $o->setExternalDeviceId($n->getStringValue()),
            'externalSourceName' => fn(ParseNode $n) => $o->setExternalSourceName($n->getStringValue()),
            'keyCredential' => fn(ParseNode $n) => $o->setKeyCredential($n->getObjectValue([KeyCredential::class, 'createFromDiscriminatorValue'])),
            'operatingSystemVersion' => fn(ParseNode $n) => $o->setOperatingSystemVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the keyCredential property value. The keyCredential property
     * @return KeyCredential|null
    */
    public function getKeyCredential(): ?KeyCredential {
        $val = $this->getBackingStore()->get('keyCredential');
        if (is_null($val) || $val instanceof KeyCredential) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyCredential'");
    }

    /**
     * Gets the operatingSystemVersion property value. The operatingSystemVersion property
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('accountEnabled', $this->getAccountEnabled());
        $writer->writeCollectionOfPrimitiveValues('alternativeNames', $this->getAlternativeNames());
        $writer->writeStringValue('externalDeviceId', $this->getExternalDeviceId());
        $writer->writeStringValue('externalSourceName', $this->getExternalSourceName());
        $writer->writeObjectValue('keyCredential', $this->getKeyCredential());
        $writer->writeStringValue('operatingSystemVersion', $this->getOperatingSystemVersion());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountEnabled property value. The accountEnabled property
     * @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value): void {
        $this->getBackingStore()->set('accountEnabled', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alternativeNames property value. The alternativeNames property
     * @param array<string>|null $value Value to set for the alternativeNames property.
    */
    public function setAlternativeNames(?array $value): void {
        $this->getBackingStore()->set('alternativeNames', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the externalDeviceId property value. The externalDeviceId property
     * @param string|null $value Value to set for the externalDeviceId property.
    */
    public function setExternalDeviceId(?string $value): void {
        $this->getBackingStore()->set('externalDeviceId', $value);
    }

    /**
     * Sets the externalSourceName property value. The externalSourceName property
     * @param string|null $value Value to set for the externalSourceName property.
    */
    public function setExternalSourceName(?string $value): void {
        $this->getBackingStore()->set('externalSourceName', $value);
    }

    /**
     * Sets the keyCredential property value. The keyCredential property
     * @param KeyCredential|null $value Value to set for the keyCredential property.
    */
    public function setKeyCredential(?KeyCredential $value): void {
        $this->getBackingStore()->set('keyCredential', $value);
    }

    /**
     * Sets the operatingSystemVersion property value. The operatingSystemVersion property
     * @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemVersion', $value);
    }

}
