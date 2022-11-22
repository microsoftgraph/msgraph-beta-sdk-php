<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new sensitivityLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabel {
        return new SensitivityLabel();
    }

    /**
     * Gets the applicableTo property value. The applicableTo property
     * @return SensitivityLabelTarget|null
    */
    public function getApplicableTo(): ?SensitivityLabelTarget {
        return $this->getBackingStore()->get('applicableTo');
    }

    /**
     * Gets the applicationMode property value. The applicationMode property
     * @return ApplicationMode|null
    */
    public function getApplicationMode(): ?ApplicationMode {
        return $this->getBackingStore()->get('applicationMode');
    }

    /**
     * Gets the assignedPolicies property value. The assignedPolicies property
     * @return array<LabelPolicy>|null
    */
    public function getAssignedPolicies(): ?array {
        return $this->getBackingStore()->get('assignedPolicies');
    }

    /**
     * Gets the autoLabeling property value. The autoLabeling property
     * @return AutoLabeling|null
    */
    public function getAutoLabeling(): ?AutoLabeling {
        return $this->getBackingStore()->get('autoLabeling');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'applicableTo' => fn(ParseNode $n) => $o->setApplicableTo($n->getEnumValue(SensitivityLabelTarget::class)),
            'applicationMode' => fn(ParseNode $n) => $o->setApplicationMode($n->getEnumValue(ApplicationMode::class)),
            'assignedPolicies' => fn(ParseNode $n) => $o->setAssignedPolicies($n->getCollectionOfObjectValues([LabelPolicy::class, 'createFromDiscriminatorValue'])),
            'autoLabeling' => fn(ParseNode $n) => $o->setAutoLabeling($n->getObjectValue([AutoLabeling::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isEndpointProtectionEnabled' => fn(ParseNode $n) => $o->setIsEndpointProtectionEnabled($n->getBooleanValue()),
            'labelActions' => fn(ParseNode $n) => $o->setLabelActions($n->getCollectionOfObjectValues([LabelActionBase::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'sublabels' => fn(ParseNode $n) => $o->setSublabels($n->getCollectionOfObjectValues([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
            'toolTip' => fn(ParseNode $n) => $o->setToolTip($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->getBackingStore()->get('isDefault');
    }

    /**
     * Gets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     * @return bool|null
    */
    public function getIsEndpointProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('isEndpointProtectionEnabled');
    }

    /**
     * Gets the labelActions property value. The labelActions property
     * @return array<LabelActionBase>|null
    */
    public function getLabelActions(): ?array {
        return $this->getBackingStore()->get('labelActions');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the sublabels property value. The sublabels property
     * @return array<SensitivityLabel>|null
    */
    public function getSublabels(): ?array {
        return $this->getBackingStore()->get('sublabels');
    }

    /**
     * Gets the toolTip property value. The toolTip property
     * @return string|null
    */
    public function getToolTip(): ?string {
        return $this->getBackingStore()->get('toolTip');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableTo', $this->getApplicableTo());
        $writer->writeEnumValue('applicationMode', $this->getApplicationMode());
        $writer->writeCollectionOfObjectValues('assignedPolicies', $this->getAssignedPolicies());
        $writer->writeObjectValue('autoLabeling', $this->getAutoLabeling());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isEndpointProtectionEnabled', $this->getIsEndpointProtectionEnabled());
        $writer->writeCollectionOfObjectValues('labelActions', $this->getLabelActions());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeCollectionOfObjectValues('sublabels', $this->getSublabels());
        $writer->writeStringValue('toolTip', $this->getToolTip());
    }

    /**
     * Sets the applicableTo property value. The applicableTo property
     *  @param SensitivityLabelTarget|null $value Value to set for the applicableTo property.
    */
    public function setApplicableTo(?SensitivityLabelTarget $value): void {
        $this->getBackingStore()->set('applicableTo', $value);
    }

    /**
     * Sets the applicationMode property value. The applicationMode property
     *  @param ApplicationMode|null $value Value to set for the applicationMode property.
    */
    public function setApplicationMode(?ApplicationMode $value): void {
        $this->getBackingStore()->set('applicationMode', $value);
    }

    /**
     * Sets the assignedPolicies property value. The assignedPolicies property
     *  @param array<LabelPolicy>|null $value Value to set for the assignedPolicies property.
    */
    public function setAssignedPolicies(?array $value): void {
        $this->getBackingStore()->set('assignedPolicies', $value);
    }

    /**
     * Sets the autoLabeling property value. The autoLabeling property
     *  @param AutoLabeling|null $value Value to set for the autoLabeling property.
    */
    public function setAutoLabeling(?AutoLabeling $value): void {
        $this->getBackingStore()->set('autoLabeling', $value);
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDefault property value. The isDefault property
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isEndpointProtectionEnabled property value. The isEndpointProtectionEnabled property
     *  @param bool|null $value Value to set for the isEndpointProtectionEnabled property.
    */
    public function setIsEndpointProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEndpointProtectionEnabled', $value);
    }

    /**
     * Sets the labelActions property value. The labelActions property
     *  @param array<LabelActionBase>|null $value Value to set for the labelActions property.
    */
    public function setLabelActions(?array $value): void {
        $this->getBackingStore()->set('labelActions', $value);
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the sublabels property value. The sublabels property
     *  @param array<SensitivityLabel>|null $value Value to set for the sublabels property.
    */
    public function setSublabels(?array $value): void {
        $this->getBackingStore()->set('sublabels', $value);
    }

    /**
     * Sets the toolTip property value. The toolTip property
     *  @param string|null $value Value to set for the toolTip property.
    */
    public function setToolTip(?string $value): void {
        $this->getBackingStore()->set('toolTip', $value);
    }

}
