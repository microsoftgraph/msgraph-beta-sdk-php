<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class WindowsDefenderApplicationControlSupplementalPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsDefenderApplicationControlSupplementalPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the assignments property value. The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
     * @return array<WindowsDefenderApplicationControlSupplementalPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the content property value. The WindowsDefenderApplicationControl supplemental policy content in byte array format.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->getBackingStore()->get('content');
    }

    /**
     * Gets the contentFileName property value. The WindowsDefenderApplicationControl supplemental policy content's file name.
     * @return string|null
    */
    public function getContentFileName(): ?string {
        return $this->getBackingStore()->get('contentFileName');
    }

    /**
     * Gets the creationDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('creationDateTime');
    }

    /**
     * Gets the deploySummary property value. WindowsDefenderApplicationControl supplemental policy deployment summary.
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary|null
    */
    public function getDeploySummary(): ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary {
        return $this->getBackingStore()->get('deploySummary');
    }

    /**
     * Gets the description property value. The description of WindowsDefenderApplicationControl supplemental policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceStatuses property value. The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     * @return array<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->getBackingStore()->get('deviceStatuses');
    }

    /**
     * Gets the displayName property value. The display name of WindowsDefenderApplicationControl supplemental policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([WindowsDefenderApplicationControlSupplementalPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'contentFileName' => fn(ParseNode $n) => $o->setContentFileName($n->getStringValue()),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'deploySummary' => fn(ParseNode $n) => $o->setDeploySummary($n->getObjectValue([WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the version property value. The WindowsDefenderApplicationControl supplemental policy's version.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('contentFileName', $this->getContentFileName());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeObjectValue('deploySummary', $this->getDeploySummary());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The associated group assignments for this WindowsDefenderApplicationControl supplemental policy.
     *  @param array<WindowsDefenderApplicationControlSupplementalPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the content property value. The WindowsDefenderApplicationControl supplemental policy content in byte array format.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the contentFileName property value. The WindowsDefenderApplicationControl supplemental policy content's file name.
     *  @param string|null $value Value to set for the contentFileName property.
    */
    public function setContentFileName(?string $value): void {
        $this->getBackingStore()->set('contentFileName', $value);
    }

    /**
     * Sets the creationDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was uploaded.
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the deploySummary property value. WindowsDefenderApplicationControl supplemental policy deployment summary.
     *  @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary|null $value Value to set for the deploySummary property.
    */
    public function setDeploySummary(?WindowsDefenderApplicationControlSupplementalPolicyDeploymentSummary $value): void {
        $this->getBackingStore()->set('deploySummary', $value);
    }

    /**
     * Sets the description property value. The description of WindowsDefenderApplicationControl supplemental policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceStatuses property value. The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy.
     *  @param array<WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the displayName property value. The display name of WindowsDefenderApplicationControl supplemental policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the WindowsDefenderApplicationControl supplemental policy was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this WindowsDefenderApplicationControl supplemental policy entity.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the version property value. The WindowsDefenderApplicationControl supplemental policy's version.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
