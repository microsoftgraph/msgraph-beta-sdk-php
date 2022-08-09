<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppFileSystemRequirement extends Win32LobAppRequirement implements Parsable 
{
    /**
     * @var bool|null $check32BitOn64System A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
    */
    private ?bool $check32BitOn64System = null;
    
    /**
     * @var Win32LobAppFileSystemDetectionType|null $detectionType Contains all supported file system detection type.
    */
    private ?Win32LobAppFileSystemDetectionType $detectionType = null;
    
    /**
     * @var string|null $fileOrFolderName The file or folder name to detect Win32 Line of Business (LoB) app
    */
    private ?string $fileOrFolderName = null;
    
    /**
     * @var string|null $path The file or folder path to detect Win32 Line of Business (LoB) app
    */
    private ?string $path = null;
    
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
        return $this->check32BitOn64System;
    }

    /**
     * Gets the detectionType property value. Contains all supported file system detection type.
     * @return Win32LobAppFileSystemDetectionType|null
    */
    public function getDetectionType(): ?Win32LobAppFileSystemDetectionType {
        return $this->detectionType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'check32BitOn64System' => function (ParseNode $n) use ($o) { $o->setCheck32BitOn64System($n->getBooleanValue()); },
            'detectionType' => function (ParseNode $n) use ($o) { $o->setDetectionType($n->getEnumValue(Win32LobAppFileSystemDetectionType::class)); },
            'fileOrFolderName' => function (ParseNode $n) use ($o) { $o->setFileOrFolderName($n->getStringValue()); },
            'path' => function (ParseNode $n) use ($o) { $o->setPath($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileOrFolderName property value. The file or folder name to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getFileOrFolderName(): ?string {
        return $this->fileOrFolderName;
    }

    /**
     * Gets the path property value. The file or folder path to detect Win32 Line of Business (LoB) app
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->check32BitOn64System);
        $writer->writeEnumValue('detectionType', $this->detectionType);
        $writer->writeStringValue('fileOrFolderName', $this->fileOrFolderName);
        $writer->writeStringValue('path', $this->path);
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
     *  @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value ): void {
        $this->check32BitOn64System = $value;
    }

    /**
     * Sets the detectionType property value. Contains all supported file system detection type.
     *  @param Win32LobAppFileSystemDetectionType|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?Win32LobAppFileSystemDetectionType $value ): void {
        $this->detectionType = $value;
    }

    /**
     * Sets the fileOrFolderName property value. The file or folder name to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the fileOrFolderName property.
    */
    public function setFileOrFolderName(?string $value ): void {
        $this->fileOrFolderName = $value;
    }

    /**
     * Sets the path property value. The file or folder path to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

}
