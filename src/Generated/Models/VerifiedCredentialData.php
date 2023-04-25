<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class VerifiedCredentialData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new verifiedCredentialData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedCredentialData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedCredentialData {
        return new VerifiedCredentialData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the authority property value. The authority ID for the issuer.
     * @return string|null
    */
    public function getAuthority(): ?string {
        return $this->getBackingStore()->get('authority');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the claims property value. Key-value pair of claims retrieved from the credential that the user presented, and the service verified.
     * @return VerifiedCredentialClaims|null
    */
    public function getClaims(): ?VerifiedCredentialClaims {
        return $this->getBackingStore()->get('claims');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authority' => fn(ParseNode $n) => $o->setAuthority($n->getStringValue()),
            'claims' => fn(ParseNode $n) => $o->setClaims($n->getObjectValue([VerifiedCredentialClaims::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the type property value. The list of credential types provided by the issuer.
     * @return array<string>|null
    */
    public function getType(): ?array {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authority', $this->getAuthority());
        $writer->writeObjectValue('claims', $this->getClaims());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('type', $this->getType());
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
     * Sets the authority property value. The authority ID for the issuer.
     * @param string|null $value Value to set for the authority property.
    */
    public function setAuthority(?string $value): void {
        $this->getBackingStore()->set('authority', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the claims property value. Key-value pair of claims retrieved from the credential that the user presented, and the service verified.
     * @param VerifiedCredentialClaims|null $value Value to set for the claims property.
    */
    public function setClaims(?VerifiedCredentialClaims $value): void {
        $this->getBackingStore()->set('claims', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the type property value. The list of credential types provided by the issuer.
     * @param array<string>|null $value Value to set for the type property.
    */
    public function setType(?array $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
