<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains file or folder path to detect a Win32 App
*/
class Win32LobAppFileSystemRequirement extends Win32LobAppRequirement implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppFileSystemRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppFileSystemRequirement');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppFileSystemRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppFileSystemRequirement {
        return new Win32LobAppFileSystemRequirement();
    }

    /**
     * Gets the check32BitOn64System property value. A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
     * @return bool|null
    */
    public function getCheck32BitOn64System(): ?bool {
        $val = $this->getBackingStore()->get('check32BitOn64System');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'check32BitOn64System'");
    }

    /**
     * Gets the detectionType property value. Contains all supported file system detection type.
     * @return Win32LobAppFileSystemDetectionType|null
    */
    public function getDetectionType(): ?Win32LobAppFileSystemDetectionType {
        $val = $this->getBackingStore()->get('detectionType');
        if (is_null($val) || $val instanceof Win32LobAppFileSystemDetectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectionType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'check32BitOn64System' => fn(ParseNode $n) => $o->setCheck32BitOn64System($n->getBooleanValue()),
            'detectionType' => fn(ParseNode $n) => $o->setDetectionType($n->getEnumValue(Win32LobAppFileSystemDetectionType::class)),
            'fileOrFolderName' => fn(ParseNode $n) => $o->setFileOrFolderName($n->getStringValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileOrFolderName property value. The file or folder name to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getFileOrFolderName(): ?string {
        $val = $this->getBackingStore()->get('fileOrFolderName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileOrFolderName'");
    }

    /**
     * Gets the path property value. The file or folder path to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getPath(): ?string {
        $val = $this->getBackingStore()->get('path');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'path'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->getCheck32BitOn64System());
        $writer->writeEnumValue('detectionType', $this->getDetectionType());
        $writer->writeStringValue('fileOrFolderName', $this->getFileOrFolderName());
        $writer->writeStringValue('path', $this->getPath());
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
     * @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value): void {
        $this->getBackingStore()->set('check32BitOn64System', $value);
    }

    /**
     * Sets the detectionType property value. Contains all supported file system detection type.
     * @param Win32LobAppFileSystemDetectionType|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?Win32LobAppFileSystemDetectionType $value): void {
        $this->getBackingStore()->set('detectionType', $value);
    }

    /**
     * Sets the fileOrFolderName property value. The file or folder name to detect Win32 Line of Business (LoB) app
     * @param string|null $value Value to set for the fileOrFolderName property.
    */
    public function setFileOrFolderName(?string $value): void {
        $this->getBackingStore()->set('fileOrFolderName', $value);
    }

    /**
     * Sets the path property value. The file or folder path to detect Win32 Line of Business (LoB) app
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

}
