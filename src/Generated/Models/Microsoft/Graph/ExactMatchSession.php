<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchSession extends ExactMatchSessionBase 
{
    /** @var string|null $checksum  */
    private ?string $checksum = null;
    
    /** @var string|null $dataUploadURI  */
    private ?string $dataUploadURI = null;
    
    /** @var array<string>|null $fields  */
    private ?array $fields = null;
    
    /** @var string|null $fileName  */
    private ?string $fileName = null;
    
    /** @var int|null $rowsPerBlock  */
    private ?int $rowsPerBlock = null;
    
    /** @var string|null $salt  */
    private ?string $salt = null;
    
    /** @var ExactMatchUploadAgent|null $uploadAgent  */
    private ?ExactMatchUploadAgent $uploadAgent = null;
    
    /** @var string|null $uploadAgentId  */
    private ?string $uploadAgentId = null;
    
    /**
     * Instantiates a new exactMatchSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchSession
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchSession {
        return new ExactMatchSession();
    }

    /**
     * Gets the checksum property value. 
     * @return string|null
    */
    public function getChecksum(): ?string {
        return $this->checksum;
    }

    /**
     * Gets the dataUploadURI property value. 
     * @return string|null
    */
    public function getDataUploadURI(): ?string {
        return $this->dataUploadURI;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'checksum' => function (self $o, ParseNode $n) { $o->setChecksum($n->getStringValue()); },
            'dataUploadURI' => function (self $o, ParseNode $n) { $o->setDataUploadURI($n->getStringValue()); },
            'fields' => function (self $o, ParseNode $n) { $o->setFields($n->getCollectionOfPrimitiveValues()); },
            'fileName' => function (self $o, ParseNode $n) { $o->setFileName($n->getStringValue()); },
            'rowsPerBlock' => function (self $o, ParseNode $n) { $o->setRowsPerBlock($n->getIntegerValue()); },
            'salt' => function (self $o, ParseNode $n) { $o->setSalt($n->getStringValue()); },
            'uploadAgent' => function (self $o, ParseNode $n) { $o->setUploadAgent($n->getObjectValue(ExactMatchUploadAgent::class)); },
            'uploadAgentId' => function (self $o, ParseNode $n) { $o->setUploadAgentId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fields property value. 
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->fields;
    }

    /**
     * Gets the fileName property value. 
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the rowsPerBlock property value. 
     * @return int|null
    */
    public function getRowsPerBlock(): ?int {
        return $this->rowsPerBlock;
    }

    /**
     * Gets the salt property value. 
     * @return string|null
    */
    public function getSalt(): ?string {
        return $this->salt;
    }

    /**
     * Gets the uploadAgent property value. 
     * @return ExactMatchUploadAgent|null
    */
    public function getUploadAgent(): ?ExactMatchUploadAgent {
        return $this->uploadAgent;
    }

    /**
     * Gets the uploadAgentId property value. 
     * @return string|null
    */
    public function getUploadAgentId(): ?string {
        return $this->uploadAgentId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('checksum', $this->checksum);
        $writer->writeStringValue('dataUploadURI', $this->dataUploadURI);
        $writer->writeCollectionOfPrimitiveValues('fields', $this->fields);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeIntegerValue('rowsPerBlock', $this->rowsPerBlock);
        $writer->writeStringValue('salt', $this->salt);
        $writer->writeObjectValue('uploadAgent', $this->uploadAgent);
        $writer->writeStringValue('uploadAgentId', $this->uploadAgentId);
    }

    /**
     * Sets the checksum property value. 
     *  @param string|null $value Value to set for the checksum property.
    */
    public function setChecksum(?string $value ): void {
        $this->checksum = $value;
    }

    /**
     * Sets the dataUploadURI property value. 
     *  @param string|null $value Value to set for the dataUploadURI property.
    */
    public function setDataUploadURI(?string $value ): void {
        $this->dataUploadURI = $value;
    }

    /**
     * Sets the fields property value. 
     *  @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value ): void {
        $this->fields = $value;
    }

    /**
     * Sets the fileName property value. 
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the rowsPerBlock property value. 
     *  @param int|null $value Value to set for the rowsPerBlock property.
    */
    public function setRowsPerBlock(?int $value ): void {
        $this->rowsPerBlock = $value;
    }

    /**
     * Sets the salt property value. 
     *  @param string|null $value Value to set for the salt property.
    */
    public function setSalt(?string $value ): void {
        $this->salt = $value;
    }

    /**
     * Sets the uploadAgent property value. 
     *  @param ExactMatchUploadAgent|null $value Value to set for the uploadAgent property.
    */
    public function setUploadAgent(?ExactMatchUploadAgent $value ): void {
        $this->uploadAgent = $value;
    }

    /**
     * Sets the uploadAgentId property value. 
     *  @param string|null $value Value to set for the uploadAgentId property.
    */
    public function setUploadAgentId(?string $value ): void {
        $this->uploadAgentId = $value;
    }

}
