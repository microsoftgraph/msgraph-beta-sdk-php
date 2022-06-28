<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppFileSystemDetection extends Win32LobAppDetection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $check32BitOn64System A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
    */
    private ?bool $check32BitOn64System = null;
    
    /**
     * @var Win32LobAppFileSystemDetectionType|null $detectionType The file system detection type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
    */
    private ?Win32LobAppFileSystemDetectionType $detectionType = null;
    
    /**
     * @var string|null $detectionValue The file or folder detection value
    */
    private ?string $detectionValue = null;
    
    /**
     * @var string|null $fileOrFolderName The file or folder name to detect Win32 Line of Business (LoB) app
    */
    private ?string $fileOrFolderName = null;
    
    /**
     * @var Win32LobAppDetectionOperator|null $operator The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
    */
    private ?Win32LobAppDetectionOperator $operator = null;
    
    /**
     * @var string|null $path The file or folder path to detect Win32 Line of Business (LoB) app
    */
    private ?string $path = null;
    
    /**
     * Instantiates a new Win32LobAppFileSystemDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppFileSystemDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppFileSystemDetection {
        return new Win32LobAppFileSystemDetection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the check32BitOn64System property value. A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
     * @return bool|null
    */
    public function getCheck32BitOn64System(): ?bool {
        return $this->check32BitOn64System;
    }

    /**
     * Gets the detectionType property value. The file system detection type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
     * @return Win32LobAppFileSystemDetectionType|null
    */
    public function getDetectionType(): ?Win32LobAppFileSystemDetectionType {
        return $this->detectionType;
    }

    /**
     * Gets the detectionValue property value. The file or folder detection value
     * @return string|null
    */
    public function getDetectionValue(): ?string {
        return $this->detectionValue;
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
            'detectionValue' => function (ParseNode $n) use ($o) { $o->setDetectionValue($n->getStringValue()); },
            'fileOrFolderName' => function (ParseNode $n) use ($o) { $o->setFileOrFolderName($n->getStringValue()); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getEnumValue(Win32LobAppDetectionOperator::class)); },
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
     * Gets the operator property value. The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
     * @return Win32LobAppDetectionOperator|null
    */
    public function getOperator(): ?Win32LobAppDetectionOperator {
        return $this->operator;
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
        $writer->writeStringValue('detectionValue', $this->detectionValue);
        $writer->writeStringValue('fileOrFolderName', $this->fileOrFolderName);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeStringValue('path', $this->path);
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
     * Sets the check32BitOn64System property value. A value indicating whether this file or folder is for checking 32-bit app on 64-bit system
     *  @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value ): void {
        $this->check32BitOn64System = $value;
    }

    /**
     * Sets the detectionType property value. The file system detection type. Possible values are: notConfigured, exists, modifiedDate, createdDate, version, sizeInMB, doesNotExist.
     *  @param Win32LobAppFileSystemDetectionType|null $value Value to set for the detectionType property.
    */
    public function setDetectionType(?Win32LobAppFileSystemDetectionType $value ): void {
        $this->detectionType = $value;
    }

    /**
     * Sets the detectionValue property value. The file or folder detection value
     *  @param string|null $value Value to set for the detectionValue property.
    */
    public function setDetectionValue(?string $value ): void {
        $this->detectionValue = $value;
    }

    /**
     * Sets the fileOrFolderName property value. The file or folder name to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the fileOrFolderName property.
    */
    public function setFileOrFolderName(?string $value ): void {
        $this->fileOrFolderName = $value;
    }

    /**
     * Sets the operator property value. The operator for file or folder detection. Possible values are: notConfigured, equal, notEqual, greaterThan, greaterThanOrEqual, lessThan, lessThanOrEqual.
     *  @param Win32LobAppDetectionOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?Win32LobAppDetectionOperator $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the path property value. The file or folder path to detect Win32 Line of Business (LoB) app
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

}
