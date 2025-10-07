<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ArkoseFraudProtectionProvider extends FraudProtectionProvider implements Parsable 
{
    /**
     * Instantiates a new ArkoseFraudProtectionProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.arkoseFraudProtectionProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ArkoseFraudProtectionProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ArkoseFraudProtectionProvider {
        return new ArkoseFraudProtectionProvider();
    }

    /**
     * Gets the clientSubDomain property value. The clientSubDomain property
     * @return string|null
    */
    public function getClientSubDomain(): ?string {
        $val = $this->getBackingStore()->get('clientSubDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSubDomain'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientSubDomain' => fn(ParseNode $n) => $o->setClientSubDomain($n->getStringValue()),
            'privateKey' => fn(ParseNode $n) => $o->setPrivateKey($n->getStringValue()),
            'publicKey' => fn(ParseNode $n) => $o->setPublicKey($n->getStringValue()),
            'verifySubDomain' => fn(ParseNode $n) => $o->setVerifySubDomain($n->getStringValue()),
        ]);
    }

    /**
     * Gets the privateKey property value. The privateKey property
     * @return string|null
    */
    public function getPrivateKey(): ?string {
        $val = $this->getBackingStore()->get('privateKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privateKey'");
    }

    /**
     * Gets the publicKey property value. The publicKey property
     * @return string|null
    */
    public function getPublicKey(): ?string {
        $val = $this->getBackingStore()->get('publicKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publicKey'");
    }

    /**
     * Gets the verifySubDomain property value. The verifySubDomain property
     * @return string|null
    */
    public function getVerifySubDomain(): ?string {
        $val = $this->getBackingStore()->get('verifySubDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifySubDomain'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientSubDomain', $this->getClientSubDomain());
        $writer->writeStringValue('privateKey', $this->getPrivateKey());
        $writer->writeStringValue('publicKey', $this->getPublicKey());
        $writer->writeStringValue('verifySubDomain', $this->getVerifySubDomain());
    }

    /**
     * Sets the clientSubDomain property value. The clientSubDomain property
     * @param string|null $value Value to set for the clientSubDomain property.
    */
    public function setClientSubDomain(?string $value): void {
        $this->getBackingStore()->set('clientSubDomain', $value);
    }

    /**
     * Sets the privateKey property value. The privateKey property
     * @param string|null $value Value to set for the privateKey property.
    */
    public function setPrivateKey(?string $value): void {
        $this->getBackingStore()->set('privateKey', $value);
    }

    /**
     * Sets the publicKey property value. The publicKey property
     * @param string|null $value Value to set for the publicKey property.
    */
    public function setPublicKey(?string $value): void {
        $this->getBackingStore()->set('publicKey', $value);
    }

    /**
     * Sets the verifySubDomain property value. The verifySubDomain property
     * @param string|null $value Value to set for the verifySubDomain property.
    */
    public function setVerifySubDomain(?string $value): void {
        $this->getBackingStore()->set('verifySubDomain', $value);
    }

}
