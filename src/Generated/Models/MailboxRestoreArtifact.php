<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxRestoreArtifact extends RestoreArtifactBase implements Parsable 
{
    /**
     * Instantiates a new MailboxRestoreArtifact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxRestoreArtifact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxRestoreArtifact {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.granularMailboxRestoreArtifact': return new GranularMailboxRestoreArtifact();
            }
        }
        return new MailboxRestoreArtifact();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'restoredFolderId' => fn(ParseNode $n) => $o->setRestoredFolderId($n->getStringValue()),
            'restoredFolderName' => fn(ParseNode $n) => $o->setRestoredFolderName($n->getStringValue()),
            'restoredItemCount' => fn(ParseNode $n) => $o->setRestoredItemCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the restoredFolderId property value. The newly restored folder identifier for the user.
     * @return string|null
    */
    public function getRestoredFolderId(): ?string {
        $val = $this->getBackingStore()->get('restoredFolderId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredFolderId'");
    }

    /**
     * Gets the restoredFolderName property value. The new restored folder name.
     * @return string|null
    */
    public function getRestoredFolderName(): ?string {
        $val = $this->getBackingStore()->get('restoredFolderName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredFolderName'");
    }

    /**
     * Gets the restoredItemCount property value. The number of items that are being restored in the folder.
     * @return int|null
    */
    public function getRestoredItemCount(): ?int {
        $val = $this->getBackingStore()->get('restoredItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restoredItemCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('restoredFolderId', $this->getRestoredFolderId());
        $writer->writeIntegerValue('restoredItemCount', $this->getRestoredItemCount());
    }

    /**
     * Sets the restoredFolderId property value. The newly restored folder identifier for the user.
     * @param string|null $value Value to set for the restoredFolderId property.
    */
    public function setRestoredFolderId(?string $value): void {
        $this->getBackingStore()->set('restoredFolderId', $value);
    }

    /**
     * Sets the restoredFolderName property value. The new restored folder name.
     * @param string|null $value Value to set for the restoredFolderName property.
    */
    public function setRestoredFolderName(?string $value): void {
        $this->getBackingStore()->set('restoredFolderName', $value);
    }

    /**
     * Sets the restoredItemCount property value. The number of items that are being restored in the folder.
     * @param int|null $value Value to set for the restoredItemCount property.
    */
    public function setRestoredItemCount(?int $value): void {
        $this->getBackingStore()->set('restoredItemCount', $value);
    }

}
