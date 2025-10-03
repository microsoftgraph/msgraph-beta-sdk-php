<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WebauthnPublicKeyCredential implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WebauthnPublicKeyCredential and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebauthnPublicKeyCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebauthnPublicKeyCredential {
        return new WebauthnPublicKeyCredential();
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
     * Gets the clientExtensionResults property value. The untyped results from the execution of extensions requested by the client when creating a new public key credential.
     * @return WebauthnAuthenticationExtensionsClientOutputs|null
    */
    public function getClientExtensionResults(): ?WebauthnAuthenticationExtensionsClientOutputs {
        $val = $this->getBackingStore()->get('clientExtensionResults');
        if (is_null($val) || $val instanceof WebauthnAuthenticationExtensionsClientOutputs) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientExtensionResults'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientExtensionResults' => fn(ParseNode $n) => $o->setClientExtensionResults($n->getObjectValue([WebauthnAuthenticationExtensionsClientOutputs::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'response' => fn(ParseNode $n) => $o->setResponse($n->getObjectValue([WebauthnAuthenticatorAttestationResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. The credential ID created by the WebAuthn Authenticator.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
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
     * Gets the response property value. Response data returned from a WebAuthn authenticator after it creates a new public key credential.
     * @return WebauthnAuthenticatorAttestationResponse|null
    */
    public function getResponse(): ?WebauthnAuthenticatorAttestationResponse {
        $val = $this->getBackingStore()->get('response');
        if (is_null($val) || $val instanceof WebauthnAuthenticatorAttestationResponse) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'response'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('clientExtensionResults', $this->getClientExtensionResults());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('response', $this->getResponse());
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
     * Sets the clientExtensionResults property value. The untyped results from the execution of extensions requested by the client when creating a new public key credential.
     * @param WebauthnAuthenticationExtensionsClientOutputs|null $value Value to set for the clientExtensionResults property.
    */
    public function setClientExtensionResults(?WebauthnAuthenticationExtensionsClientOutputs $value): void {
        $this->getBackingStore()->set('clientExtensionResults', $value);
    }

    /**
     * Sets the id property value. The credential ID created by the WebAuthn Authenticator.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the response property value. Response data returned from a WebAuthn authenticator after it creates a new public key credential.
     * @param WebauthnAuthenticatorAttestationResponse|null $value Value to set for the response property.
    */
    public function setResponse(?WebauthnAuthenticatorAttestationResponse $value): void {
        $this->getBackingStore()->set('response', $value);
    }

}
