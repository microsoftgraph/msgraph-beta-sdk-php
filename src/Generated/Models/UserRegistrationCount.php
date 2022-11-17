<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserRegistrationCount implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userRegistrationCount and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userRegistrationCount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationCount {
        return new UserRegistrationCount();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'registrationCount' => fn(ParseNode $n) => $o->setRegistrationCount($n->getIntegerValue()),
            'registrationStatus' => fn(ParseNode $n) => $o->setRegistrationStatus($n->getEnumValue(RegistrationStatusType::class)),
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
     * Gets the registrationCount property value. Provides the registration count for your tenant.
     * @return int|null
    */
    public function getRegistrationCount(): ?int {
        return $this->getBackingStore()->get('registrationCount');
    }

    /**
     * Gets the registrationStatus property value. The registrationStatus property
     * @return RegistrationStatusType|null
    */
    public function getRegistrationStatus(): ?RegistrationStatusType {
        return $this->getBackingStore()->get('registrationStatus');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('registrationCount', $this->getRegistrationCount());
        $writer->writeEnumValue('registrationStatus', $this->getRegistrationStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the registrationCount property value. Provides the registration count for your tenant.
     *  @param int|null $value Value to set for the registrationCount property.
    */
    public function setRegistrationCount(?int $value): void {
        $this->getBackingStore()->set('registrationCount', $value);
    }

    /**
     * Sets the registrationStatus property value. The registrationStatus property
     *  @param RegistrationStatusType|null $value Value to set for the registrationStatus property.
    */
    public function setRegistrationStatus(?RegistrationStatusType $value): void {
        $this->getBackingStore()->set('registrationStatus', $value);
    }

}
