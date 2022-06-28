<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchSession extends ExactMatchSessionBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $checksum The checksum property
    */
    private ?string $checksum = null;
    
    /**
     * @var string|null $dataUploadURI The dataUploadURI property
    */
    private ?string $dataUploadURI = null;
    
    /**
     * @var array<string>|null $fields The fields property
    */
    private ?array $fields = null;
    
    /**
     * @var string|null $fileName The fileName property
    */
    private ?string $fileName = null;
    
    /**
     * @var int|null $rowsPerBlock The rowsPerBlock property
    */
    private ?int $rowsPerBlock = null;
    
    /**
     * @var string|null $salt The salt property
    */
    private ?string $salt = null;
    
    /**
     * @var ExactMatchUploadAgent|null $uploadAgent The uploadAgent property
    */
    private ?ExactMatchUploadAgent $uploadAgent = null;
    
    /**
     * @var string|null $uploadAgentId The uploadAgentId property
    */
    private ?string $uploadAgentId = null;
    
    /**
     * Instantiates a new ExactMatchSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchSession {
        return new ExactMatchSession();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the checksum property value. The checksum property
     * @return string|null
    */
    public function getChecksum(): ?string {
        return $this->checksum;
    }

    /**
     * Gets the dataUploadURI property value. The dataUploadURI property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'checksum' => function (ParseNode $n) use ($o) { $o->setChecksum($n->getStringValue()); },
            'dataUploadURI' => function (ParseNode $n) use ($o) { $o->setDataUploadURI($n->getStringValue()); },
            'fields' => function (ParseNode $n) use ($o) { $o->setFields($n->getCollectionOfPrimitiveValues()); },
            'fileName' => function (ParseNode $n) use ($o) { $o->setFileName($n->getStringValue()); },
            'rowsPerBlock' => function (ParseNode $n) use ($o) { $o->setRowsPerBlock($n->getIntegerValue()); },
            'salt' => function (ParseNode $n) use ($o) { $o->setSalt($n->getStringValue()); },
            'uploadAgent' => function (ParseNode $n) use ($o) { $o->setUploadAgent($n->getObjectValue(array(ExactMatchUploadAgent::class, 'createFromDiscriminatorValue'))); },
            'uploadAgentId' => function (ParseNode $n) use ($o) { $o->setUploadAgentId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fields property value. The fields property
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->fields;
    }

    /**
     * Gets the fileName property value. The fileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the rowsPerBlock property value. The rowsPerBlock property
     * @return int|null
    */
    public function getRowsPerBlock(): ?int {
        return $this->rowsPerBlock;
    }

    /**
     * Gets the salt property value. The salt property
     * @return string|null
    */
    public function getSalt(): ?string {
        return $this->salt;
    }

    /**
     * Gets the uploadAgent property value. The uploadAgent property
     * @return ExactMatchUploadAgent|null
    */
    public function getUploadAgent(): ?ExactMatchUploadAgent {
        return $this->uploadAgent;
    }

    /**
     * Gets the uploadAgentId property value. The uploadAgentId property
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
     * Sets the checksum property value. The checksum property
     *  @param string|null $value Value to set for the checksum property.
    */
    public function setChecksum(?string $value ): void {
        $this->checksum = $value;
    }

    /**
     * Sets the dataUploadURI property value. The dataUploadURI property
     *  @param string|null $value Value to set for the dataUploadURI property.
    */
    public function setDataUploadURI(?string $value ): void {
        $this->dataUploadURI = $value;
    }

    /**
     * Sets the fields property value. The fields property
     *  @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value ): void {
        $this->fields = $value;
    }

    /**
     * Sets the fileName property value. The fileName property
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the rowsPerBlock property value. The rowsPerBlock property
     *  @param int|null $value Value to set for the rowsPerBlock property.
    */
    public function setRowsPerBlock(?int $value ): void {
        $this->rowsPerBlock = $value;
    }

    /**
     * Sets the salt property value. The salt property
     *  @param string|null $value Value to set for the salt property.
    */
    public function setSalt(?string $value ): void {
        $this->salt = $value;
    }

    /**
     * Sets the uploadAgent property value. The uploadAgent property
     *  @param ExactMatchUploadAgent|null $value Value to set for the uploadAgent property.
    */
    public function setUploadAgent(?ExactMatchUploadAgent $value ): void {
        $this->uploadAgent = $value;
    }

    /**
     * Sets the uploadAgentId property value. The uploadAgentId property
     *  @param string|null $value Value to set for the uploadAgentId property.
    */
    public function setUploadAgentId(?string $value ): void {
        $this->uploadAgentId = $value;
    }

}
