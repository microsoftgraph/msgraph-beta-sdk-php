<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxExclusionUnit extends ExclusionUnitBase implements Parsable 
{
    /**
     * Instantiates a new MailboxExclusionUnit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mailboxExclusionUnit');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxExclusionUnit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxExclusionUnit {
        return new MailboxExclusionUnit();
    }

    /**
     * Gets the directoryObjectId property value. The unique identifier of the directory object (user) associated with the mailbox.
     * @return string|null
    */
    public function getDirectoryObjectId(): ?string {
        $val = $this->getBackingStore()->get('directoryObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryObjectId'");
    }

    /**
     * Gets the displayName property value. The display name of the mailbox.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the email property value. The email address of the mailbox.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directoryObjectId' => fn(ParseNode $n) => $o->setDirectoryObjectId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'mailboxType' => fn(ParseNode $n) => $o->setMailboxType($n->getEnumValue(MailboxType::class)),
        ]);
    }

    /**
     * Gets the mailboxType property value. The mailboxType property
     * @return MailboxType|null
    */
    public function getMailboxType(): ?MailboxType {
        $val = $this->getBackingStore()->get('mailboxType');
        if (is_null($val) || $val instanceof MailboxType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mailboxType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('directoryObjectId', $this->getDirectoryObjectId());
        $writer->writeEnumValue('mailboxType', $this->getMailboxType());
    }

    /**
     * Sets the directoryObjectId property value. The unique identifier of the directory object (user) associated with the mailbox.
     * @param string|null $value Value to set for the directoryObjectId property.
    */
    public function setDirectoryObjectId(?string $value): void {
        $this->getBackingStore()->set('directoryObjectId', $value);
    }

    /**
     * Sets the displayName property value. The display name of the mailbox.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the email property value. The email address of the mailbox.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the mailboxType property value. The mailboxType property
     * @param MailboxType|null $value Value to set for the mailboxType property.
    */
    public function setMailboxType(?MailboxType $value): void {
        $this->getBackingStore()->set('mailboxType', $value);
    }

}
