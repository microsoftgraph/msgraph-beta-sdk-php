<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class WindowsDefenderApplicationControlSupplementalPolicy extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<WindowsDefenderApplicationControlSupplementalPolicyAssignment>|null $assignments The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
    */
    private ?array $assignments = null;
    
    /**
     * @var StreamInterface|null $content The WindowsDefenderApplicationControl supplemental policy content in byte array format.
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var string|null $contentFileName The WindowsDefenderApplicationControl supplemental policy content's file name.
    */
    private ?string $contentFileName = null;
    
    /**
     * @var DateTime|null $creationDateTime The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
    */
    private ?DateTime $creationDateTime = null;
    
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary|null $deploySummary WindowsDefenderApplicationControl supplemental policy deployment summary.
    */
    private ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary $deploySummary = null;
    
    /**
     * @var string|null $description The description of WindowsDefenderApplicationControl supplemental policy.
    */
    private ?string $description = null;
    
    /**
     * @var array<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus>|null $deviceStatuses The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
    */
    private ?array $deviceStatuses = null;
    
    /**
     * @var string|null $displayName The display name of WindowsDefenderApplicationControl supplemental policy.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var string|null $version The WindowsDefenderApplicationControl supplemental policy's version.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderApplicationControlSupplementalPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderApplicationControlSupplementalPolicy {
        return new WindowsDefenderApplicationControlSupplementalPolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignments property value. The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
     * @return array<WindowsDefenderApplicationControlSupplementalPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the content property value. The WindowsDefenderApplicationControl supplemental policy content in byte array format.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the contentFileName property value. The WindowsDefenderApplicationControl supplemental policy content's file name.
     * @return string|null
    */
    public function getContentFileName(): ?string {
        return $this->contentFileName;
    }

    /**
     * Gets the creationDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the deploySummary property value. WindowsDefenderApplicationControl supplemental policy deployment summary.
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary|null
    */
    public function getDeploySummary(): ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary {
        return $this->deploySummary;
    }

    /**
     * Gets the description property value. The description of WindowsDefenderApplicationControl supplemental policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceStatuses property value. The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     * @return array<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the displayName property value. The display name of WindowsDefenderApplicationControl supplemental policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(WindowsDefenderApplicationControlSupplementalPolicyAssignment::class, 'createFromDiscriminatorValue'))); },
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'contentFileName' => function (ParseNode $n) use ($o) { $o->setContentFileName($n->getStringValue()); },
            'creationDateTime' => function (ParseNode $n) use ($o) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'deploySummary' => function (ParseNode $n) use ($o) { $o->setDeploySummary($n->getObjectValue(array(WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceStatuses' => function (ParseNode $n) use ($o) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(array(WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the version property value. The WindowsDefenderApplicationControl supplemental policy's version.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeStringValue('contentFileName', $this->contentFileName);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeObjectValue('deploySummary', $this->deploySummary);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeStringValue('version', $this->version);
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
     * Sets the assignments property value. The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
     *  @param array<WindowsDefenderApplicationControlSupplementalPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the content property value. The WindowsDefenderApplicationControl supplemental policy content in byte array format.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentFileName property value. The WindowsDefenderApplicationControl supplemental policy content's file name.
     *  @param string|null $value Value to set for the contentFileName property.
    */
    public function setContentFileName(?string $value ): void {
        $this->contentFileName = $value;
    }

    /**
     * Sets the creationDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the deploySummary property value. WindowsDefenderApplicationControl supplemental policy deployment summary.
     *  @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary|null $value Value to set for the deploySummary property.
    */
    public function setDeploySummary(?WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary $value ): void {
        $this->deploySummary = $value;
    }

    /**
     * Sets the description property value. The description of WindowsDefenderApplicationControl supplemental policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceStatuses property value. The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     *  @param array<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the displayName property value. The display name of WindowsDefenderApplicationControl supplemental policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the version property value. The WindowsDefenderApplicationControl supplemental policy's version.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
