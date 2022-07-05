<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileSecurityProfile extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $activityGroupNames The activityGroupNames property
    */
    private ?array $activityGroupNames = null;
    
    /**
     * @var string|null $azureSubscriptionId The azureSubscriptionId property
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $azureTenantId The azureTenantId property
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var string|null $certificateThumbprint The certificateThumbprint property
    */
    private ?string $certificateThumbprint = null;
    
    /**
     * @var array<string>|null $extensions The extensions property
    */
    private ?array $extensions = null;
    
    /**
     * @var string|null $fileType The fileType property
    */
    private ?string $fileType = null;
    
    /**
     * @var DateTime|null $firstSeenDateTime The firstSeenDateTime property
    */
    private ?DateTime $firstSeenDateTime = null;
    
    /**
     * @var array<FileHash>|null $hashes The hashes property
    */
    private ?array $hashes = null;
    
    /**
     * @var DateTime|null $lastSeenDateTime The lastSeenDateTime property
    */
    private ?DateTime $lastSeenDateTime = null;
    
    /**
     * @var array<MalwareState>|null $malwareStates The malwareStates property
    */
    private ?array $malwareStates = null;
    
    /**
     * @var array<string>|null $names The names property
    */
    private ?array $names = null;
    
    /**
     * @var string|null $riskScore The riskScore property
    */
    private ?string $riskScore = null;
    
    /**
     * @var int|null $size The size property
    */
    private ?int $size = null;
    
    /**
     * @var array<string>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation The vendorInformation property
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * @var array<VulnerabilityState>|null $vulnerabilityStates The vulnerabilityStates property
    */
    private ?array $vulnerabilityStates = null;
    
    /**
     * Instantiates a new FileSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileSecurityProfile {
        return new FileSecurityProfile();
    }

    /**
     * Gets the activityGroupNames property value. The activityGroupNames property
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        return $this->activityGroupNames;
    }

    /**
     * Gets the azureSubscriptionId property value. The azureSubscriptionId property
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->azureSubscriptionId;
    }

    /**
     * Gets the azureTenantId property value. The azureTenantId property
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the certificateThumbprint property value. The certificateThumbprint property
     * @return string|null
    */
    public function getCertificateThumbprint(): ?string {
        return $this->certificateThumbprint;
    }

    /**
     * Gets the extensions property value. The extensions property
     * @return array<string>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityGroupNames' => function (ParseNode $n) use ($o) { $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()); },
            'azureSubscriptionId' => function (ParseNode $n) use ($o) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'azureTenantId' => function (ParseNode $n) use ($o) { $o->setAzureTenantId($n->getStringValue()); },
            'certificateThumbprint' => function (ParseNode $n) use ($o) { $o->setCertificateThumbprint($n->getStringValue()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfPrimitiveValues()); },
            'fileType' => function (ParseNode $n) use ($o) { $o->setFileType($n->getStringValue()); },
            'firstSeenDateTime' => function (ParseNode $n) use ($o) { $o->setFirstSeenDateTime($n->getDateTimeValue()); },
            'hashes' => function (ParseNode $n) use ($o) { $o->setHashes($n->getCollectionOfObjectValues(array(FileHash::class, 'createFromDiscriminatorValue'))); },
            'lastSeenDateTime' => function (ParseNode $n) use ($o) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'malwareStates' => function (ParseNode $n) use ($o) { $o->setMalwareStates($n->getCollectionOfObjectValues(array(MalwareState::class, 'createFromDiscriminatorValue'))); },
            'names' => function (ParseNode $n) use ($o) { $o->setNames($n->getCollectionOfPrimitiveValues()); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'vendorInformation' => function (ParseNode $n) use ($o) { $o->setVendorInformation($n->getObjectValue(array(SecurityVendorInformation::class, 'createFromDiscriminatorValue'))); },
            'vulnerabilityStates' => function (ParseNode $n) use ($o) { $o->setVulnerabilityStates($n->getCollectionOfObjectValues(array(VulnerabilityState::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fileType property value. The fileType property
     * @return string|null
    */
    public function getFileType(): ?string {
        return $this->fileType;
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the hashes property value. The hashes property
     * @return array<FileHash>|null
    */
    public function getHashes(): ?array {
        return $this->hashes;
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the malwareStates property value. The malwareStates property
     * @return array<MalwareState>|null
    */
    public function getMalwareStates(): ?array {
        return $this->malwareStates;
    }

    /**
     * Gets the names property value. The names property
     * @return array<string>|null
    */
    public function getNames(): ?array {
        return $this->names;
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->vendorInformation;
    }

    /**
     * Gets the vulnerabilityStates property value. The vulnerabilityStates property
     * @return array<VulnerabilityState>|null
    */
    public function getVulnerabilityStates(): ?array {
        return $this->vulnerabilityStates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->activityGroupNames);
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeStringValue('certificateThumbprint', $this->certificateThumbprint);
        $writer->writeCollectionOfPrimitiveValues('extensions', $this->extensions);
        $writer->writeStringValue('fileType', $this->fileType);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->firstSeenDateTime);
        $writer->writeCollectionOfObjectValues('hashes', $this->hashes);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeCollectionOfObjectValues('malwareStates', $this->malwareStates);
        $writer->writeCollectionOfPrimitiveValues('names', $this->names);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
        $writer->writeCollectionOfObjectValues('vulnerabilityStates', $this->vulnerabilityStates);
    }

    /**
     * Sets the activityGroupNames property value. The activityGroupNames property
     *  @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value ): void {
        $this->activityGroupNames = $value;
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value ): void {
        $this->azureSubscriptionId = $value;
    }

    /**
     * Sets the azureTenantId property value. The azureTenantId property
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the certificateThumbprint property value. The certificateThumbprint property
     *  @param string|null $value Value to set for the certificateThumbprint property.
    */
    public function setCertificateThumbprint(?string $value ): void {
        $this->certificateThumbprint = $value;
    }

    /**
     * Sets the extensions property value. The extensions property
     *  @param array<string>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the fileType property value. The fileType property
     *  @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value ): void {
        $this->fileType = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the hashes property value. The hashes property
     *  @param array<FileHash>|null $value Value to set for the hashes property.
    */
    public function setHashes(?array $value ): void {
        $this->hashes = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the malwareStates property value. The malwareStates property
     *  @param array<MalwareState>|null $value Value to set for the malwareStates property.
    */
    public function setMalwareStates(?array $value ): void {
        $this->malwareStates = $value;
    }

    /**
     * Sets the names property value. The names property
     *  @param array<string>|null $value Value to set for the names property.
    */
    public function setNames(?array $value ): void {
        $this->names = $value;
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the size property value. The size property
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

    /**
     * Sets the vulnerabilityStates property value. The vulnerabilityStates property
     *  @param array<VulnerabilityState>|null $value Value to set for the vulnerabilityStates property.
    */
    public function setVulnerabilityStates(?array $value ): void {
        $this->vulnerabilityStates = $value;
    }

}
