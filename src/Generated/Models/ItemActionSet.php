<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ItemActionSet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ItemActionSet and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActionSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemActionSet {
        return new ItemActionSet();
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
     * Gets the comment property value. A comment was added to the item.
     * @return CommentAction|null
    */
    public function getComment(): ?CommentAction {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || $val instanceof CommentAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * Gets the create property value. An item was created.
     * @return CreateAction|null
    */
    public function getCreate(): ?CreateAction {
        $val = $this->getBackingStore()->get('create');
        if (is_null($val) || $val instanceof CreateAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'create'");
    }

    /**
     * Gets the delete property value. An item was deleted.
     * @return DeleteAction|null
    */
    public function getDelete(): ?DeleteAction {
        $val = $this->getBackingStore()->get('delete');
        if (is_null($val) || $val instanceof DeleteAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delete'");
    }

    /**
     * Gets the edit property value. An item was edited.
     * @return EditAction|null
    */
    public function getEdit(): ?EditAction {
        $val = $this->getBackingStore()->get('edit');
        if (is_null($val) || $val instanceof EditAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'edit'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getObjectValue([CommentAction::class, 'createFromDiscriminatorValue'])),
            'create' => fn(ParseNode $n) => $o->setCreate($n->getObjectValue([CreateAction::class, 'createFromDiscriminatorValue'])),
            'delete' => fn(ParseNode $n) => $o->setDelete($n->getObjectValue([DeleteAction::class, 'createFromDiscriminatorValue'])),
            'edit' => fn(ParseNode $n) => $o->setEdit($n->getObjectValue([EditAction::class, 'createFromDiscriminatorValue'])),
            'mention' => fn(ParseNode $n) => $o->setMention($n->getObjectValue([MentionAction::class, 'createFromDiscriminatorValue'])),
            'move' => fn(ParseNode $n) => $o->setMove($n->getObjectValue([MoveAction::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'rename' => fn(ParseNode $n) => $o->setRename($n->getObjectValue([RenameAction::class, 'createFromDiscriminatorValue'])),
            'restore' => fn(ParseNode $n) => $o->setRestore($n->getObjectValue([RestoreAction::class, 'createFromDiscriminatorValue'])),
            'share' => fn(ParseNode $n) => $o->setShare($n->getObjectValue([ShareAction::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getObjectValue([VersionAction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the mention property value. A user was mentioned in the item.
     * @return MentionAction|null
    */
    public function getMention(): ?MentionAction {
        $val = $this->getBackingStore()->get('mention');
        if (is_null($val) || $val instanceof MentionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mention'");
    }

    /**
     * Gets the move property value. An item was moved.
     * @return MoveAction|null
    */
    public function getMove(): ?MoveAction {
        $val = $this->getBackingStore()->get('move');
        if (is_null($val) || $val instanceof MoveAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'move'");
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
     * Gets the rename property value. An item was renamed.
     * @return RenameAction|null
    */
    public function getRename(): ?RenameAction {
        $val = $this->getBackingStore()->get('rename');
        if (is_null($val) || $val instanceof RenameAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rename'");
    }

    /**
     * Gets the restore property value. An item was restored.
     * @return RestoreAction|null
    */
    public function getRestore(): ?RestoreAction {
        $val = $this->getBackingStore()->get('restore');
        if (is_null($val) || $val instanceof RestoreAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restore'");
    }

    /**
     * Gets the share property value. An item was shared.
     * @return ShareAction|null
    */
    public function getShare(): ?ShareAction {
        $val = $this->getBackingStore()->get('share');
        if (is_null($val) || $val instanceof ShareAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'share'");
    }

    /**
     * Gets the version property value. An item was versioned.
     * @return VersionAction|null
    */
    public function getVersion(): ?VersionAction {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || $val instanceof VersionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('comment', $this->getComment());
        $writer->writeObjectValue('create', $this->getCreate());
        $writer->writeObjectValue('delete', $this->getDelete());
        $writer->writeObjectValue('edit', $this->getEdit());
        $writer->writeObjectValue('mention', $this->getMention());
        $writer->writeObjectValue('move', $this->getMove());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('rename', $this->getRename());
        $writer->writeObjectValue('restore', $this->getRestore());
        $writer->writeObjectValue('share', $this->getShare());
        $writer->writeObjectValue('version', $this->getVersion());
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
     * Sets the comment property value. A comment was added to the item.
     * @param CommentAction|null $value Value to set for the comment property.
    */
    public function setComment(?CommentAction $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the create property value. An item was created.
     * @param CreateAction|null $value Value to set for the create property.
    */
    public function setCreate(?CreateAction $value): void {
        $this->getBackingStore()->set('create', $value);
    }

    /**
     * Sets the delete property value. An item was deleted.
     * @param DeleteAction|null $value Value to set for the delete property.
    */
    public function setDelete(?DeleteAction $value): void {
        $this->getBackingStore()->set('delete', $value);
    }

    /**
     * Sets the edit property value. An item was edited.
     * @param EditAction|null $value Value to set for the edit property.
    */
    public function setEdit(?EditAction $value): void {
        $this->getBackingStore()->set('edit', $value);
    }

    /**
     * Sets the mention property value. A user was mentioned in the item.
     * @param MentionAction|null $value Value to set for the mention property.
    */
    public function setMention(?MentionAction $value): void {
        $this->getBackingStore()->set('mention', $value);
    }

    /**
     * Sets the move property value. An item was moved.
     * @param MoveAction|null $value Value to set for the move property.
    */
    public function setMove(?MoveAction $value): void {
        $this->getBackingStore()->set('move', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the rename property value. An item was renamed.
     * @param RenameAction|null $value Value to set for the rename property.
    */
    public function setRename(?RenameAction $value): void {
        $this->getBackingStore()->set('rename', $value);
    }

    /**
     * Sets the restore property value. An item was restored.
     * @param RestoreAction|null $value Value to set for the restore property.
    */
    public function setRestore(?RestoreAction $value): void {
        $this->getBackingStore()->set('restore', $value);
    }

    /**
     * Sets the share property value. An item was shared.
     * @param ShareAction|null $value Value to set for the share property.
    */
    public function setShare(?ShareAction $value): void {
        $this->getBackingStore()->set('share', $value);
    }

    /**
     * Sets the version property value. An item was versioned.
     * @param VersionAction|null $value Value to set for the version property.
    */
    public function setVersion(?VersionAction $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
