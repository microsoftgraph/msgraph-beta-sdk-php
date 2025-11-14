<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkbookComment extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookComment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookComment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookComment {
        return new WorkbookComment();
    }

    /**
     * Gets the cellAddress property value. The cell where the comment is located. The address value is in A1-style, which contains the sheet reference (for example, Sheet1!A1). Read-only.
     * @return string|null
    */
    public function getCellAddress(): ?string {
        $val = $this->getBackingStore()->get('cellAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellAddress'");
    }

    /**
     * Gets the content property value. The content of the comment that is the String displayed to end-users.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the contentType property value. The content type of the comment. Supported values are: plain, mention.
     * @return string|null
    */
    public function getContentType(): ?string {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cellAddress' => fn(ParseNode $n) => $o->setCellAddress($n->getStringValue()),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'mentions' => fn(ParseNode $n) => $o->setMentions($n->getCollectionOfObjectValues([WorkbookCommentMention::class, 'createFromDiscriminatorValue'])),
            'replies' => fn(ParseNode $n) => $o->setReplies($n->getCollectionOfObjectValues([WorkbookCommentReply::class, 'createFromDiscriminatorValue'])),
            'richContent' => fn(ParseNode $n) => $o->setRichContent($n->getStringValue()),
            'task' => fn(ParseNode $n) => $o->setTask($n->getObjectValue([WorkbookDocumentTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mentions property value. A collection that contains all the people mentioned within the comment. When contentType is plain, this property is an empty array. Read-only.
     * @return array<WorkbookCommentMention>|null
    */
    public function getMentions(): ?array {
        $val = $this->getBackingStore()->get('mentions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookCommentMention::class);
            /** @var array<WorkbookCommentMention>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentions'");
    }

    /**
     * Gets the replies property value. The list of replies to the comment. Read-only. Nullable.
     * @return array<WorkbookCommentReply>|null
    */
    public function getReplies(): ?array {
        $val = $this->getBackingStore()->get('replies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookCommentReply::class);
            /** @var array<WorkbookCommentReply>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replies'");
    }

    /**
     * Gets the richContent property value. The rich content of the comment (for example, comment content with mentions, where the first mentioned entity has an ID attribute of 0 and the second has an ID attribute of 1). When contentType is plain, this property is empty. Read-only.
     * @return string|null
    */
    public function getRichContent(): ?string {
        $val = $this->getBackingStore()->get('richContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'richContent'");
    }

    /**
     * Gets the task property value. The task associated with the comment. Read-only. Nullable.
     * @return WorkbookDocumentTask|null
    */
    public function getTask(): ?WorkbookDocumentTask {
        $val = $this->getBackingStore()->get('task');
        if (is_null($val) || $val instanceof WorkbookDocumentTask) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'task'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cellAddress', $this->getCellAddress());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeCollectionOfObjectValues('mentions', $this->getMentions());
        $writer->writeCollectionOfObjectValues('replies', $this->getReplies());
        $writer->writeStringValue('richContent', $this->getRichContent());
        $writer->writeObjectValue('task', $this->getTask());
    }

    /**
     * Sets the cellAddress property value. The cell where the comment is located. The address value is in A1-style, which contains the sheet reference (for example, Sheet1!A1). Read-only.
     * @param string|null $value Value to set for the cellAddress property.
    */
    public function setCellAddress(?string $value): void {
        $this->getBackingStore()->set('cellAddress', $value);
    }

    /**
     * Sets the content property value. The content of the comment that is the String displayed to end-users.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the contentType property value. The content type of the comment. Supported values are: plain, mention.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the mentions property value. A collection that contains all the people mentioned within the comment. When contentType is plain, this property is an empty array. Read-only.
     * @param array<WorkbookCommentMention>|null $value Value to set for the mentions property.
    */
    public function setMentions(?array $value): void {
        $this->getBackingStore()->set('mentions', $value);
    }

    /**
     * Sets the replies property value. The list of replies to the comment. Read-only. Nullable.
     * @param array<WorkbookCommentReply>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value): void {
        $this->getBackingStore()->set('replies', $value);
    }

    /**
     * Sets the richContent property value. The rich content of the comment (for example, comment content with mentions, where the first mentioned entity has an ID attribute of 0 and the second has an ID attribute of 1). When contentType is plain, this property is empty. Read-only.
     * @param string|null $value Value to set for the richContent property.
    */
    public function setRichContent(?string $value): void {
        $this->getBackingStore()->set('richContent', $value);
    }

    /**
     * Sets the task property value. The task associated with the comment. Read-only. Nullable.
     * @param WorkbookDocumentTask|null $value Value to set for the task property.
    */
    public function setTask(?WorkbookDocumentTask $value): void {
        $this->getBackingStore()->set('task', $value);
    }

}
