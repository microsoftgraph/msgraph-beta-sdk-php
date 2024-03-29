<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MicrosoftAuthenticatorFeatureSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorFeatureSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorFeatureSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorFeatureSettings {
        return new MicrosoftAuthenticatorFeatureSettings();
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
     * Gets the companionAppAllowedState property value. Determines whether users are able to approve push notifications on other Microsoft applications such as Outlook Mobile.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getCompanionAppAllowedState(): ?AuthenticationMethodFeatureConfiguration {
        $val = $this->getBackingStore()->get('companionAppAllowedState');
        if (is_null($val) || $val instanceof AuthenticationMethodFeatureConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companionAppAllowedState'");
    }

    /**
     * Gets the displayAppInformationRequiredState property value. Determines whether the user's Authenticator app shows them the client app they're signing into.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getDisplayAppInformationRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        $val = $this->getBackingStore()->get('displayAppInformationRequiredState');
        if (is_null($val) || $val instanceof AuthenticationMethodFeatureConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayAppInformationRequiredState'");
    }

    /**
     * Gets the displayLocationInformationRequiredState property value. Determines whether the user's Authenticator app shows them the geographic location of where the authentication request originated from.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getDisplayLocationInformationRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        $val = $this->getBackingStore()->get('displayLocationInformationRequiredState');
        if (is_null($val) || $val instanceof AuthenticationMethodFeatureConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayLocationInformationRequiredState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'companionAppAllowedState' => fn(ParseNode $n) => $o->setCompanionAppAllowedState($n->getObjectValue([AuthenticationMethodFeatureConfiguration::class, 'createFromDiscriminatorValue'])),
            'displayAppInformationRequiredState' => fn(ParseNode $n) => $o->setDisplayAppInformationRequiredState($n->getObjectValue([AuthenticationMethodFeatureConfiguration::class, 'createFromDiscriminatorValue'])),
            'displayLocationInformationRequiredState' => fn(ParseNode $n) => $o->setDisplayLocationInformationRequiredState($n->getObjectValue([AuthenticationMethodFeatureConfiguration::class, 'createFromDiscriminatorValue'])),
            'numberMatchingRequiredState' => fn(ParseNode $n) => $o->setNumberMatchingRequiredState($n->getObjectValue([AuthenticationMethodFeatureConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the numberMatchingRequiredState property value. Specifies whether the user needs to enter a number in the Authenticator app from the login screen to complete their login. Value is ignored for phone sign-in notifications.
     * @return AuthenticationMethodFeatureConfiguration|null
    */
    public function getNumberMatchingRequiredState(): ?AuthenticationMethodFeatureConfiguration {
        $val = $this->getBackingStore()->get('numberMatchingRequiredState');
        if (is_null($val) || $val instanceof AuthenticationMethodFeatureConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberMatchingRequiredState'");
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
        $writer->writeObjectValue('companionAppAllowedState', $this->getCompanionAppAllowedState());
        $writer->writeObjectValue('displayAppInformationRequiredState', $this->getDisplayAppInformationRequiredState());
        $writer->writeObjectValue('displayLocationInformationRequiredState', $this->getDisplayLocationInformationRequiredState());
        $writer->writeObjectValue('numberMatchingRequiredState', $this->getNumberMatchingRequiredState());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the companionAppAllowedState property value. Determines whether users are able to approve push notifications on other Microsoft applications such as Outlook Mobile.
     * @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the companionAppAllowedState property.
    */
    public function setCompanionAppAllowedState(?AuthenticationMethodFeatureConfiguration $value): void {
        $this->getBackingStore()->set('companionAppAllowedState', $value);
    }

    /**
     * Sets the displayAppInformationRequiredState property value. Determines whether the user's Authenticator app shows them the client app they're signing into.
     * @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the displayAppInformationRequiredState property.
    */
    public function setDisplayAppInformationRequiredState(?AuthenticationMethodFeatureConfiguration $value): void {
        $this->getBackingStore()->set('displayAppInformationRequiredState', $value);
    }

    /**
     * Sets the displayLocationInformationRequiredState property value. Determines whether the user's Authenticator app shows them the geographic location of where the authentication request originated from.
     * @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the displayLocationInformationRequiredState property.
    */
    public function setDisplayLocationInformationRequiredState(?AuthenticationMethodFeatureConfiguration $value): void {
        $this->getBackingStore()->set('displayLocationInformationRequiredState', $value);
    }

    /**
     * Sets the numberMatchingRequiredState property value. Specifies whether the user needs to enter a number in the Authenticator app from the login screen to complete their login. Value is ignored for phone sign-in notifications.
     * @param AuthenticationMethodFeatureConfiguration|null $value Value to set for the numberMatchingRequiredState property.
    */
    public function setNumberMatchingRequiredState(?AuthenticationMethodFeatureConfiguration $value): void {
        $this->getBackingStore()->set('numberMatchingRequiredState', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
