<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LinkRoleAbilities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LinkRoleAbilities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinkRoleAbilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinkRoleAbilities {
        return new LinkRoleAbilities();
    }

    /**
     * Gets the addExistingExternalUsers property value. Indicates if the current user can add existing external user recipients to this sharing link.
     * @return SharingOperationStatus|null
    */
    public function getAddExistingExternalUsers(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('addExistingExternalUsers');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addExistingExternalUsers'");
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
     * Gets the addNewExternalUsers property value. Indicates if the current user can add new external user recipients to this sharing link.
     * @return SharingOperationStatus|null
    */
    public function getAddNewExternalUsers(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('addNewExternalUsers');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addNewExternalUsers'");
    }

    /**
     * Gets the applyVariants property value. Indicates the status of the potential sharing link variants. If selected, it generates a separate sharing link from the sharing link that would otherwise be generated without the variant, yet with an identical role and scope.
     * @return SharingLinkVariants|null
    */
    public function getApplyVariants(): ?SharingLinkVariants {
        $val = $this->getBackingStore()->get('applyVariants');
        if (is_null($val) || $val instanceof SharingLinkVariants) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyVariants'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the createLink property value. Indicates if links of this role can be created.
     * @return SharingOperationStatus|null
    */
    public function getCreateLink(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('createLink');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createLink'");
    }

    /**
     * Gets the deleteLink property value. Indicates if links of this role can be deleted.
     * @return SharingOperationStatus|null
    */
    public function getDeleteLink(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('deleteLink');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deleteLink'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addExistingExternalUsers' => fn(ParseNode $n) => $o->setAddExistingExternalUsers($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'addNewExternalUsers' => fn(ParseNode $n) => $o->setAddNewExternalUsers($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'applyVariants' => fn(ParseNode $n) => $o->setApplyVariants($n->getObjectValue([SharingLinkVariants::class, 'createFromDiscriminatorValue'])),
            'createLink' => fn(ParseNode $n) => $o->setCreateLink($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'deleteLink' => fn(ParseNode $n) => $o->setDeleteLink($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'linkAllowsExternalUsers' => fn(ParseNode $n) => $o->setLinkAllowsExternalUsers($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'linkExpiration' => fn(ParseNode $n) => $o->setLinkExpiration($n->getObjectValue([SharingLinkExpirationStatus::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'retrieveLink' => fn(ParseNode $n) => $o->setRetrieveLink($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
            'updateLink' => fn(ParseNode $n) => $o->setUpdateLink($n->getObjectValue([SharingOperationStatus::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the linkAllowsExternalUsers property value. Indicates if this link can include external users.
     * @return SharingOperationStatus|null
    */
    public function getLinkAllowsExternalUsers(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('linkAllowsExternalUsers');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkAllowsExternalUsers'");
    }

    /**
     * Gets the linkExpiration property value. Indicates if links must expire, meaning the link is no longer usable after a specified time. If link expiration is enabled, a default link expiration time is provided.
     * @return SharingLinkExpirationStatus|null
    */
    public function getLinkExpiration(): ?SharingLinkExpirationStatus {
        $val = $this->getBackingStore()->get('linkExpiration');
        if (is_null($val) || $val instanceof SharingLinkExpirationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkExpiration'");
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
     * Gets the retrieveLink property value. Indicates if links of this role can be retrieved.
     * @return SharingOperationStatus|null
    */
    public function getRetrieveLink(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('retrieveLink');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retrieveLink'");
    }

    /**
     * Gets the updateLink property value. Indicates if links of this role can be updated.
     * @return SharingOperationStatus|null
    */
    public function getUpdateLink(): ?SharingOperationStatus {
        $val = $this->getBackingStore()->get('updateLink');
        if (is_null($val) || $val instanceof SharingOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateLink'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('addExistingExternalUsers', $this->getAddExistingExternalUsers());
        $writer->writeObjectValue('addNewExternalUsers', $this->getAddNewExternalUsers());
        $writer->writeObjectValue('applyVariants', $this->getApplyVariants());
        $writer->writeObjectValue('createLink', $this->getCreateLink());
        $writer->writeObjectValue('deleteLink', $this->getDeleteLink());
        $writer->writeObjectValue('linkAllowsExternalUsers', $this->getLinkAllowsExternalUsers());
        $writer->writeObjectValue('linkExpiration', $this->getLinkExpiration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('retrieveLink', $this->getRetrieveLink());
        $writer->writeObjectValue('updateLink', $this->getUpdateLink());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addExistingExternalUsers property value. Indicates if the current user can add existing external user recipients to this sharing link.
     * @param SharingOperationStatus|null $value Value to set for the addExistingExternalUsers property.
    */
    public function setAddExistingExternalUsers(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('addExistingExternalUsers', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the addNewExternalUsers property value. Indicates if the current user can add new external user recipients to this sharing link.
     * @param SharingOperationStatus|null $value Value to set for the addNewExternalUsers property.
    */
    public function setAddNewExternalUsers(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('addNewExternalUsers', $value);
    }

    /**
     * Sets the applyVariants property value. Indicates the status of the potential sharing link variants. If selected, it generates a separate sharing link from the sharing link that would otherwise be generated without the variant, yet with an identical role and scope.
     * @param SharingLinkVariants|null $value Value to set for the applyVariants property.
    */
    public function setApplyVariants(?SharingLinkVariants $value): void {
        $this->getBackingStore()->set('applyVariants', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the createLink property value. Indicates if links of this role can be created.
     * @param SharingOperationStatus|null $value Value to set for the createLink property.
    */
    public function setCreateLink(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('createLink', $value);
    }

    /**
     * Sets the deleteLink property value. Indicates if links of this role can be deleted.
     * @param SharingOperationStatus|null $value Value to set for the deleteLink property.
    */
    public function setDeleteLink(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('deleteLink', $value);
    }

    /**
     * Sets the linkAllowsExternalUsers property value. Indicates if this link can include external users.
     * @param SharingOperationStatus|null $value Value to set for the linkAllowsExternalUsers property.
    */
    public function setLinkAllowsExternalUsers(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('linkAllowsExternalUsers', $value);
    }

    /**
     * Sets the linkExpiration property value. Indicates if links must expire, meaning the link is no longer usable after a specified time. If link expiration is enabled, a default link expiration time is provided.
     * @param SharingLinkExpirationStatus|null $value Value to set for the linkExpiration property.
    */
    public function setLinkExpiration(?SharingLinkExpirationStatus $value): void {
        $this->getBackingStore()->set('linkExpiration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the retrieveLink property value. Indicates if links of this role can be retrieved.
     * @param SharingOperationStatus|null $value Value to set for the retrieveLink property.
    */
    public function setRetrieveLink(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('retrieveLink', $value);
    }

    /**
     * Sets the updateLink property value. Indicates if links of this role can be updated.
     * @param SharingOperationStatus|null $value Value to set for the updateLink property.
    */
    public function setUpdateLink(?SharingOperationStatus $value): void {
        $this->getBackingStore()->set('updateLink', $value);
    }

}
