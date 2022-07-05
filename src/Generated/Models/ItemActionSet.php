<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActionSet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CommentAction|null $comment A comment was added to the item.
    */
    private ?CommentAction $comment = null;
    
    /**
     * @var CreateAction|null $create An item was created.
    */
    private ?CreateAction $create = null;
    
    /**
     * @var DeleteAction|null $delete An item was deleted.
    */
    private ?DeleteAction $delete = null;
    
    /**
     * @var EditAction|null $edit An item was edited.
    */
    private ?EditAction $edit = null;
    
    /**
     * @var MentionAction|null $mention A user was mentioned in the item.
    */
    private ?MentionAction $mention = null;
    
    /**
     * @var MoveAction|null $move An item was moved.
    */
    private ?MoveAction $move = null;
    
    /**
     * @var RenameAction|null $rename An item was renamed.
    */
    private ?RenameAction $rename = null;
    
    /**
     * @var RestoreAction|null $restore An item was restored.
    */
    private ?RestoreAction $restore = null;
    
    /**
     * @var ShareAction|null $share An item was shared.
    */
    private ?ShareAction $share = null;
    
    /**
     * @var VersionAction|null $version An item was versioned.
    */
    private ?VersionAction $version = null;
    
    /**
     * Instantiates a new itemActionSet and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. A comment was added to the item.
     * @return CommentAction|null
    */
    public function getComment(): ?CommentAction {
        return $this->comment;
    }

    /**
     * Gets the create property value. An item was created.
     * @return CreateAction|null
    */
    public function getCreate(): ?CreateAction {
        return $this->create;
    }

    /**
     * Gets the delete property value. An item was deleted.
     * @return DeleteAction|null
    */
    public function getDelete(): ?DeleteAction {
        return $this->delete;
    }

    /**
     * Gets the edit property value. An item was edited.
     * @return EditAction|null
    */
    public function getEdit(): ?EditAction {
        return $this->edit;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comment' => function (ParseNode $n) use ($o) { $o->setComment($n->getObjectValue(array(CommentAction::class, 'createFromDiscriminatorValue'))); },
            'create' => function (ParseNode $n) use ($o) { $o->setCreate($n->getObjectValue(array(CreateAction::class, 'createFromDiscriminatorValue'))); },
            'delete' => function (ParseNode $n) use ($o) { $o->setDelete($n->getObjectValue(array(DeleteAction::class, 'createFromDiscriminatorValue'))); },
            'edit' => function (ParseNode $n) use ($o) { $o->setEdit($n->getObjectValue(array(EditAction::class, 'createFromDiscriminatorValue'))); },
            'mention' => function (ParseNode $n) use ($o) { $o->setMention($n->getObjectValue(array(MentionAction::class, 'createFromDiscriminatorValue'))); },
            'move' => function (ParseNode $n) use ($o) { $o->setMove($n->getObjectValue(array(MoveAction::class, 'createFromDiscriminatorValue'))); },
            'rename' => function (ParseNode $n) use ($o) { $o->setRename($n->getObjectValue(array(RenameAction::class, 'createFromDiscriminatorValue'))); },
            'restore' => function (ParseNode $n) use ($o) { $o->setRestore($n->getObjectValue(array(RestoreAction::class, 'createFromDiscriminatorValue'))); },
            'share' => function (ParseNode $n) use ($o) { $o->setShare($n->getObjectValue(array(ShareAction::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getObjectValue(array(VersionAction::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the mention property value. A user was mentioned in the item.
     * @return MentionAction|null
    */
    public function getMention(): ?MentionAction {
        return $this->mention;
    }

    /**
     * Gets the move property value. An item was moved.
     * @return MoveAction|null
    */
    public function getMove(): ?MoveAction {
        return $this->move;
    }

    /**
     * Gets the rename property value. An item was renamed.
     * @return RenameAction|null
    */
    public function getRename(): ?RenameAction {
        return $this->rename;
    }

    /**
     * Gets the restore property value. An item was restored.
     * @return RestoreAction|null
    */
    public function getRestore(): ?RestoreAction {
        return $this->restore;
    }

    /**
     * Gets the share property value. An item was shared.
     * @return ShareAction|null
    */
    public function getShare(): ?ShareAction {
        return $this->share;
    }

    /**
     * Gets the version property value. An item was versioned.
     * @return VersionAction|null
    */
    public function getVersion(): ?VersionAction {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('comment', $this->comment);
        $writer->writeObjectValue('create', $this->create);
        $writer->writeObjectValue('delete', $this->delete);
        $writer->writeObjectValue('edit', $this->edit);
        $writer->writeObjectValue('mention', $this->mention);
        $writer->writeObjectValue('move', $this->move);
        $writer->writeObjectValue('rename', $this->rename);
        $writer->writeObjectValue('restore', $this->restore);
        $writer->writeObjectValue('share', $this->share);
        $writer->writeObjectValue('version', $this->version);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the comment property value. A comment was added to the item.
     *  @param CommentAction|null $value Value to set for the comment property.
    */
    public function setComment(?CommentAction $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the create property value. An item was created.
     *  @param CreateAction|null $value Value to set for the create property.
    */
    public function setCreate(?CreateAction $value ): void {
        $this->create = $value;
    }

    /**
     * Sets the delete property value. An item was deleted.
     *  @param DeleteAction|null $value Value to set for the delete property.
    */
    public function setDelete(?DeleteAction $value ): void {
        $this->delete = $value;
    }

    /**
     * Sets the edit property value. An item was edited.
     *  @param EditAction|null $value Value to set for the edit property.
    */
    public function setEdit(?EditAction $value ): void {
        $this->edit = $value;
    }

    /**
     * Sets the mention property value. A user was mentioned in the item.
     *  @param MentionAction|null $value Value to set for the mention property.
    */
    public function setMention(?MentionAction $value ): void {
        $this->mention = $value;
    }

    /**
     * Sets the move property value. An item was moved.
     *  @param MoveAction|null $value Value to set for the move property.
    */
    public function setMove(?MoveAction $value ): void {
        $this->move = $value;
    }

    /**
     * Sets the rename property value. An item was renamed.
     *  @param RenameAction|null $value Value to set for the rename property.
    */
    public function setRename(?RenameAction $value ): void {
        $this->rename = $value;
    }

    /**
     * Sets the restore property value. An item was restored.
     *  @param RestoreAction|null $value Value to set for the restore property.
    */
    public function setRestore(?RestoreAction $value ): void {
        $this->restore = $value;
    }

    /**
     * Sets the share property value. An item was shared.
     *  @param ShareAction|null $value Value to set for the share property.
    */
    public function setShare(?ShareAction $value ): void {
        $this->share = $value;
    }

    /**
     * Sets the version property value. An item was versioned.
     *  @param VersionAction|null $value Value to set for the version property.
    */
    public function setVersion(?VersionAction $value ): void {
        $this->version = $value;
    }

}
