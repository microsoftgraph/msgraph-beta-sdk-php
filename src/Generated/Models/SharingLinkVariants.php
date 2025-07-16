<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharingLinkVariants implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharingLinkVariants and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharingLinkVariants
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharingLinkVariants {
        return new SharingLinkVariants();
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
     * Gets the addressBarLinkPermission property value. Indicates the most permissive role with which an address bar link can be created. The possible values are: none, view, edit, manageList, review, restrictedView, submitOnly, unknownFutureValue.
     * @return SharingRole|null
    */
    public function getAddressBarLinkPermission(): ?SharingRole {
        $val = $this->getBackingStore()->get('addressBarLinkPermission');
        if (is_null($val) || $val instanceof SharingRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addressBarLinkPermission'");
    }

    /**
     * Gets the allowEmbed property value. Indicates whether a link can be embedded.
     * @return SharingOperationStatus|null
    */
    public function getAllowEmbed(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('allowEmbed');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowEmbed'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
            'addressBarLinkPermission' => fn(ParseNode $n) => $o->setAddressBarLinkPermission($n->getEnumValue(SharingRole::class)),
            'allowEmbed' => fn(ParseNode $n) => $o->setAllowEmbed($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passwordProtected' => fn(ParseNode $n) => $o->setPasswordProtected($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'requiresAuthentication' => fn(ParseNode $n) => $o->setRequiresAuthentication($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
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
     * Gets the passwordProtected property value. Indicates whether a link can be password protected, meaning that link users would need to enter a password to access the item for which the sharing link is produced. Creating a passwordProtected link for the first time requires providing a password.
     * @return SharingOperationStatus|null
    */
    public function getPasswordProtected(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('passwordProtected');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordProtected'");
    }

    /**
     * Gets the requiresAuthentication property value. Indicates whether a link requires identity authentication for recipients. Users can be verified through either an email address or identity.
     * @return SharingOperationStatus|null
    */
    public function getRequiresAuthentication(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('requiresAuthentication');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiresAuthentication'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('addressBarLinkPermission', $this->getAddressBarLinkPermission());
        $writer->writeObjectValue('allowEmbed', $this->getAllowEmbed());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('passwordProtected', $this->getPasswordProtected());
        $writer->writeObjectValue('requiresAuthentication', $this->getRequiresAuthentication());
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
     * Sets the addressBarLinkPermission property value. Indicates the most permissive role with which an address bar link can be created. The possible values are: none, view, edit, manageList, review, restrictedView, submitOnly, unknownFutureValue.
     * @param SharingRole|null $value Value to set for the addressBarLinkPermission property.
    */
    public function setAddressBarLinkPermission(?SharingRole $value): void {
        $this->getBackingStore()->set('addressBarLinkPermission', $value);
    }

    /**
     * Sets the allowEmbed property value. Indicates whether a link can be embedded.
     * @param SharingOperationStatus|null $value Value to set for the allowEmbed property.
    */
    public function setAllowEmbed(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('allowEmbed', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the passwordProtected property value. Indicates whether a link can be password protected, meaning that link users would need to enter a password to access the item for which the sharing link is produced. Creating a passwordProtected link for the first time requires providing a password.
     * @param SharingOperationStatus|null $value Value to set for the passwordProtected property.
    */
    public function setPasswordProtected(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('passwordProtected', $value);
    }

    /**
     * Sets the requiresAuthentication property value. Indicates whether a link requires identity authentication for recipients. Users can be verified through either an email address or identity.
     * @param SharingOperationStatus|null $value Value to set for the requiresAuthentication property.
    */
    public function setRequiresAuthentication(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('requiresAuthentication', $value);
    }

}
