<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $fileName The name of the file.
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $filePath The file path (location) of the file instance.
    */
    private ?string $filePath = null;
    
    /**
     * @var string|null $filePublisher The publisher of the file.
    */
    private ?string $filePublisher = null;
    
    /**
     * @var int|null $fileSize The size of the file in bytes.
    */
    private ?int $fileSize = null;
    
    /**
     * @var string|null $issuer The certificate authority (CA) that issued the certificate.
    */
    private ?string $issuer = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $sha1 The Sha1 cryptographic hash of the file content.
    */
    private ?string $sha1 = null;
    
    /**
     * @var string|null $sha256 The Sha256 cryptographic hash of the file content.
    */
    private ?string $sha256 = null;
    
    /**
     * @var string|null $signer The signer of the signed file.
    */
    private ?string $signer = null;
    
    /**
     * Instantiates a new fileDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.fileDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileDetails {
        return new FileDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            'filePublisher' => fn(ParseNode $n) => $o->setFilePublisher($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sha1' => fn(ParseNode $n) => $o->setSha1($n->getStringValue()),
            'sha256' => fn(ParseNode $n) => $o->setSha256($n->getStringValue()),
            'signer' => fn(ParseNode $n) => $o->setSigner($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. The name of the file.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the filePath property value. The file path (location) of the file instance.
     * @return string|null
    */
    public function getFilePath(): ?string {
        return $this->filePath;
    }

    /**
     * Gets the filePublisher property value. The publisher of the file.
     * @return string|null
    */
    public function getFilePublisher(): ?string {
        return $this->filePublisher;
    }

    /**
     * Gets the fileSize property value. The size of the file in bytes.
     * @return int|null
    */
    public function getFileSize(): ?int {
        return $this->fileSize;
    }

    /**
     * Gets the issuer property value. The certificate authority (CA) that issued the certificate.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->issuer;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sha1 property value. The Sha1 cryptographic hash of the file content.
     * @return string|null
    */
    public function getSha1(): ?string {
        return $this->sha1;
    }

    /**
     * Gets the sha256 property value. The Sha256 cryptographic hash of the file content.
     * @return string|null
    */
    public function getSha256(): ?string {
        return $this->sha256;
    }

    /**
     * Gets the signer property value. The signer of the signed file.
     * @return string|null
    */
    public function getSigner(): ?string {
        return $this->signer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeStringValue('filePath', $this->filePath);
        $writer->writeStringValue('filePublisher', $this->filePublisher);
        $writer->writeIntegerValue('fileSize', $this->fileSize);
        $writer->writeStringValue('issuer', $this->issuer);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('sha1', $this->sha1);
        $writer->writeStringValue('sha256', $this->sha256);
        $writer->writeStringValue('signer', $this->signer);
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
     * Sets the fileName property value. The name of the file.
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the filePath property value. The file path (location) of the file instance.
     *  @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value ): void {
        $this->filePath = $value;
    }

    /**
     * Sets the filePublisher property value. The publisher of the file.
     *  @param string|null $value Value to set for the filePublisher property.
    */
    public function setFilePublisher(?string $value ): void {
        $this->filePublisher = $value;
    }

    /**
     * Sets the fileSize property value. The size of the file in bytes.
     *  @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value ): void {
        $this->fileSize = $value;
    }

    /**
     * Sets the issuer property value. The certificate authority (CA) that issued the certificate.
     *  @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value ): void {
        $this->issuer = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sha1 property value. The Sha1 cryptographic hash of the file content.
     *  @param string|null $value Value to set for the sha1 property.
    */
    public function setSha1(?string $value ): void {
        $this->sha1 = $value;
    }

    /**
     * Sets the sha256 property value. The Sha256 cryptographic hash of the file content.
     *  @param string|null $value Value to set for the sha256 property.
    */
    public function setSha256(?string $value ): void {
        $this->sha256 = $value;
    }

    /**
     * Sets the signer property value. The signer of the signed file.
     *  @param string|null $value Value to set for the signer property.
    */
    public function setSigner(?string $value ): void {
        $this->signer = $value;
    }

}
