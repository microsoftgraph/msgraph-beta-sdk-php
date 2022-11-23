<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchSession extends ExactMatchSessionBase implements Parsable 
{
    /**
     * Instantiates a new ExactMatchSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the checksum property value. The checksum property
     * @return string|null
    */
    public function getChecksum(): ?string {
        return $this->getBackingStore()->get('checksum');
    }

    /**
     * Gets the dataUploadURI property value. The dataUploadURI property
     * @return string|null
    */
    public function getDataUploadURI(): ?string {
        return $this->getBackingStore()->get('dataUploadURI');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'checksum' => fn(ParseNode $n) => $o->setChecksum($n->getStringValue()),
            'dataUploadURI' => fn(ParseNode $n) => $o->setDataUploadURI($n->getStringValue()),
            'fields' => fn(ParseNode $n) => $o->setFields($n->getCollectionOfPrimitiveValues()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'rowsPerBlock' => fn(ParseNode $n) => $o->setRowsPerBlock($n->getIntegerValue()),
            'salt' => fn(ParseNode $n) => $o->setSalt($n->getStringValue()),
            'uploadAgent' => fn(ParseNode $n) => $o->setUploadAgent($n->getObjectValue([ExactMatchUploadAgent::class, 'createFromDiscriminatorValue'])),
            'uploadAgentId' => fn(ParseNode $n) => $o->setUploadAgentId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fields property value. The fields property
     * @return array<string>|null
    */
    public function getFields(): ?array {
        return $this->getBackingStore()->get('fields');
    }

    /**
     * Gets the fileName property value. The fileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->getBackingStore()->get('fileName');
    }

    /**
     * Gets the rowsPerBlock property value. The rowsPerBlock property
     * @return int|null
    */
    public function getRowsPerBlock(): ?int {
        return $this->getBackingStore()->get('rowsPerBlock');
    }

    /**
     * Gets the salt property value. The salt property
     * @return string|null
    */
    public function getSalt(): ?string {
        return $this->getBackingStore()->get('salt');
    }

    /**
     * Gets the uploadAgent property value. The uploadAgent property
     * @return ExactMatchUploadAgent|null
    */
    public function getUploadAgent(): ?ExactMatchUploadAgent {
        return $this->getBackingStore()->get('uploadAgent');
    }

    /**
     * Gets the uploadAgentId property value. The uploadAgentId property
     * @return string|null
    */
    public function getUploadAgentId(): ?string {
        return $this->getBackingStore()->get('uploadAgentId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('checksum', $this->getChecksum());
        $writer->writeStringValue('dataUploadURI', $this->getDataUploadURI());
        $writer->writeCollectionOfPrimitiveValues('fields', $this->getFields());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeIntegerValue('rowsPerBlock', $this->getRowsPerBlock());
        $writer->writeStringValue('salt', $this->getSalt());
        $writer->writeObjectValue('uploadAgent', $this->getUploadAgent());
        $writer->writeStringValue('uploadAgentId', $this->getUploadAgentId());
    }

    /**
     * Sets the checksum property value. The checksum property
     *  @param string|null $value Value to set for the checksum property.
    */
    public function setChecksum(?string $value): void {
        $this->getBackingStore()->set('checksum', $value);
    }

    /**
     * Sets the dataUploadURI property value. The dataUploadURI property
     *  @param string|null $value Value to set for the dataUploadURI property.
    */
    public function setDataUploadURI(?string $value): void {
        $this->getBackingStore()->set('dataUploadURI', $value);
    }

    /**
     * Sets the fields property value. The fields property
     *  @param array<string>|null $value Value to set for the fields property.
    */
    public function setFields(?array $value): void {
        $this->getBackingStore()->set('fields', $value);
    }

    /**
     * Sets the fileName property value. The fileName property
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the rowsPerBlock property value. The rowsPerBlock property
     *  @param int|null $value Value to set for the rowsPerBlock property.
    */
    public function setRowsPerBlock(?int $value): void {
        $this->getBackingStore()->set('rowsPerBlock', $value);
    }

    /**
     * Sets the salt property value. The salt property
     *  @param string|null $value Value to set for the salt property.
    */
    public function setSalt(?string $value): void {
        $this->getBackingStore()->set('salt', $value);
    }

    /**
     * Sets the uploadAgent property value. The uploadAgent property
     *  @param ExactMatchUploadAgent|null $value Value to set for the uploadAgent property.
    */
    public function setUploadAgent(?ExactMatchUploadAgent $value): void {
        $this->getBackingStore()->set('uploadAgent', $value);
    }

    /**
     * Sets the uploadAgentId property value. The uploadAgentId property
     *  @param string|null $value Value to set for the uploadAgentId property.
    */
    public function setUploadAgentId(?string $value): void {
        $this->getBackingStore()->set('uploadAgentId', $value);
    }

}
