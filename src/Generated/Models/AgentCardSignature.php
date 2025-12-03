<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AgentCardSignature implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgentCardSignature and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentCardSignature
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentCardSignature {
        return new AgentCardSignature();
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
     * Gets the protected property value. The protected JWS header for the signature. This is a Base64url-encoded JSON object, as per RFC 7515.
     * @return string|null
    */
    public function getEscapedProtected(): ?string {
        $val = $this->getBackingStore()->get('escapedProtected');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedProtected'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'protected' => fn(ParseNode $n) => $o->setEscapedProtected($n->getStringValue()),
            'header' => fn(ParseNode $n) => $o->setHeader($n->getObjectValue([JwsHeader::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'signature' => fn(ParseNode $n) => $o->setSignature($n->getStringValue()),
        ];
    }

    /**
     * Gets the header property value. The unprotected JWS header values.
     * @return JwsHeader|null
    */
    public function getHeader(): ?JwsHeader {
        $val = $this->getBackingStore()->get('header');
        if (is_null($val) || $val instanceof JwsHeader) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'header'");
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
     * Gets the signature property value. The computed signature, Base64url-encoded.
     * @return string|null
    */
    public function getSignature(): ?string {
        $val = $this->getBackingStore()->get('signature');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signature'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('protected', $this->getEscapedProtected());
        $writer->writeObjectValue('header', $this->getHeader());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('signature', $this->getSignature());
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
     * Sets the protected property value. The protected JWS header for the signature. This is a Base64url-encoded JSON object, as per RFC 7515.
     * @param string|null $value Value to set for the protected property.
    */
    public function setEscapedProtected(?string $value): void {
        $this->getBackingStore()->set('escapedProtected', $value);
    }

    /**
     * Sets the header property value. The unprotected JWS header values.
     * @param JwsHeader|null $value Value to set for the header property.
    */
    public function setHeader(?JwsHeader $value): void {
        $this->getBackingStore()->set('header', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the signature property value. The computed signature, Base64url-encoded.
     * @param string|null $value Value to set for the signature property.
    */
    public function setSignature(?string $value): void {
        $this->getBackingStore()->set('signature', $value);
    }

}
