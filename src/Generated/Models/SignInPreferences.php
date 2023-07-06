<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SignInPreferences implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new signInPreferences and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInPreferences {
        return new SignInPreferences();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isSystemPreferredAuthenticationMethodEnabled' => fn(ParseNode $n) => $o->setIsSystemPreferredAuthenticationMethodEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userPreferredMethodForSecondaryAuthentication' => fn(ParseNode $n) => $o->setUserPreferredMethodForSecondaryAuthentication($n->getEnumValue(UserDefaultAuthenticationMethodType::class)),
        ];
    }

    /**
     * Gets the isSystemPreferredAuthenticationMethodEnabled property value. Indicates whether the credential preferences of the system are enabled.
     * @return bool|null
    */
    public function getIsSystemPreferredAuthenticationMethodEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSystemPreferredAuthenticationMethodEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSystemPreferredAuthenticationMethodEnabled'");
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
     * Gets the userPreferredMethodForSecondaryAuthentication property value. The default second-factor method used by the user when signing in. If a user is enabled for system-preferred authentication, then this value is ignored except for a few scenarios where a user is authenticating via NPS extension or ADFS adapter. Possible values are push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, and unknownFutureValue
     * @return UserDefaultAuthenticationMethodType|null
    */
    public function getUserPreferredMethodForSecondaryAuthentication(): ?UserDefaultAuthenticationMethodType {
        $val = $this->getBackingStore()->get('userPreferredMethodForSecondaryAuthentication');
        if (is_null($val) || $val instanceof UserDefaultAuthenticationMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPreferredMethodForSecondaryAuthentication'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isSystemPreferredAuthenticationMethodEnabled', $this->getIsSystemPreferredAuthenticationMethodEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('userPreferredMethodForSecondaryAuthentication', $this->getUserPreferredMethodForSecondaryAuthentication());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isSystemPreferredAuthenticationMethodEnabled property value. Indicates whether the credential preferences of the system are enabled.
     * @param bool|null $value Value to set for the isSystemPreferredAuthenticationMethodEnabled property.
    */
    public function setIsSystemPreferredAuthenticationMethodEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSystemPreferredAuthenticationMethodEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userPreferredMethodForSecondaryAuthentication property value. The default second-factor method used by the user when signing in. If a user is enabled for system-preferred authentication, then this value is ignored except for a few scenarios where a user is authenticating via NPS extension or ADFS adapter. Possible values are push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, and unknownFutureValue
     * @param UserDefaultAuthenticationMethodType|null $value Value to set for the userPreferredMethodForSecondaryAuthentication property.
    */
    public function setUserPreferredMethodForSecondaryAuthentication(?UserDefaultAuthenticationMethodType $value): void {
        $this->getBackingStore()->set('userPreferredMethodForSecondaryAuthentication', $value);
    }

}
