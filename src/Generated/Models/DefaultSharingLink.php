<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DefaultSharingLink implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DefaultSharingLink and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultSharingLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultSharingLink {
        return new DefaultSharingLink();
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
     * Gets the defaultToExistingAccess property value. Indicates whether the default link setting for this object is a direct URL rather than a sharing link.
     * @return bool|null
    */
    public function getDefaultToExistingAccess(): ?bool {
        $val = $this->getBackingStore()->get('defaultToExistingAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultToExistingAccess'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultToExistingAccess' => fn(ParseNode $n) => $o->setDefaultToExistingAccess($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(SharingRole::class)),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getEnumValue(SharingScope::class)),
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
     * Gets the role property value. The default sharing link role. The possible values are: none, view, edit, manageList, review, restrictedView, submitOnly, unknownFutureValue.
     * @return SharingRole|null
    */
    public function getRole(): ?SharingRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof SharingRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Gets the scope property value. The default sharing link scope. The possible values are: anyone, organization, specificPeople, anonymous, users, unknownFutureValue.
     * @return SharingScope|null
    */
    public function getScope(): ?SharingScope {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || $val instanceof SharingScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('defaultToExistingAccess', $this->getDefaultToExistingAccess());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeEnumValue('scope', $this->getScope());
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
     * Sets the defaultToExistingAccess property value. Indicates whether the default link setting for this object is a direct URL rather than a sharing link.
     * @param bool|null $value Value to set for the defaultToExistingAccess property.
    */
    public function setDefaultToExistingAccess(?bool $value): void {
        $this->getBackingStore()->set('defaultToExistingAccess', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the role property value. The default sharing link role. The possible values are: none, view, edit, manageList, review, restrictedView, submitOnly, unknownFutureValue.
     * @param SharingRole|null $value Value to set for the role property.
    */
    public function setRole(?SharingRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the scope property value. The default sharing link scope. The possible values are: anyone, organization, specificPeople, anonymous, users, unknownFutureValue.
     * @param SharingScope|null $value Value to set for the scope property.
    */
    public function setScope(?SharingScope $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}
