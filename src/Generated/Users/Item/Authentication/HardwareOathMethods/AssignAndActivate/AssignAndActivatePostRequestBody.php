<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\HardwareOathMethods\AssignAndActivate;

use Microsoft\Graph\Beta\Generated\Models\HardwareOathTokenAuthenticationMethodDevice;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AssignAndActivatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AssignAndActivatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignAndActivatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignAndActivatePostRequestBody {
        return new AssignAndActivatePostRequestBody();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the device property value. The device property
     * @return HardwareOathTokenAuthenticationMethodDevice|null
    */
    public function getDevice(): ?HardwareOathTokenAuthenticationMethodDevice {
        $val = $this->getBackingStore()->get('device');
        if (is_null($val) || $val instanceof HardwareOathTokenAuthenticationMethodDevice) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'device'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'verificationCode' => fn(ParseNode $n) => $o->setVerificationCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the verificationCode property value. The verificationCode property
     * @return string|null
    */
    public function getVerificationCode(): ?string {
        $val = $this->getBackingStore()->get('verificationCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verificationCode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('verificationCode', $this->getVerificationCode());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the device property value. The device property
     * @param HardwareOathTokenAuthenticationMethodDevice|null $value Value to set for the device property.
    */
    public function setDevice(?HardwareOathTokenAuthenticationMethodDevice $value): void {
        $this->getBackingStore()->set('device', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the verificationCode property value. The verificationCode property
     * @param string|null $value Value to set for the verificationCode property.
    */
    public function setVerificationCode(?string $value): void {
        $this->getBackingStore()->set('verificationCode', $value);
    }

}
