<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembershipOutlierInsight extends GovernanceInsight implements Parsable 
{
    /**
     * @var DirectoryObject|null $container Navigation link to the container directory object. For example, to a group.
    */
    private ?DirectoryObject $container = null;
    
    /**
     * @var string|null $containerId Indicates the identifier of the container, for example, a group ID.
    */
    private ?string $containerId = null;
    
    /**
     * @var DirectoryObject|null $member Navigation link to a member object. For example, to a user.
    */
    private ?DirectoryObject $member = null;
    
    /**
     * @var string|null $memberId Indicates the identifier of the user.
    */
    private ?string $memberId = null;
    
    /**
     * @var OutlierContainerType|null $outlierContainerType The outlierContainerType property
    */
    private ?OutlierContainerType $outlierContainerType = null;
    
    /**
     * @var OutlierMemberType|null $outlierMemberType The outlierMemberType property
    */
    private ?OutlierMemberType $outlierMemberType = null;
    
    /**
     * Instantiates a new MembershipOutlierInsight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.membershipOutlierInsight');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembershipOutlierInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembershipOutlierInsight {
        return new MembershipOutlierInsight();
    }

    /**
     * Gets the container property value. Navigation link to the container directory object. For example, to a group.
     * @return DirectoryObject|null
    */
    public function getContainer(): ?DirectoryObject {
        return $this->container;
    }

    /**
     * Gets the containerId property value. Indicates the identifier of the container, for example, a group ID.
     * @return string|null
    */
    public function getContainerId(): ?string {
        return $this->containerId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'container' => function (ParseNode $n) use ($o) { $o->setContainer($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'containerId' => function (ParseNode $n) use ($o) { $o->setContainerId($n->getStringValue()); },
            'member' => function (ParseNode $n) use ($o) { $o->setMember($n->getObjectValue(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'memberId' => function (ParseNode $n) use ($o) { $o->setMemberId($n->getStringValue()); },
            'outlierContainerType' => function (ParseNode $n) use ($o) { $o->setOutlierContainerType($n->getEnumValue(OutlierContainerType::class)); },
            'outlierMemberType' => function (ParseNode $n) use ($o) { $o->setOutlierMemberType($n->getEnumValue(OutlierMemberType::class)); },
        ]);
    }

    /**
     * Gets the member property value. Navigation link to a member object. For example, to a user.
     * @return DirectoryObject|null
    */
    public function getMember(): ?DirectoryObject {
        return $this->member;
    }

    /**
     * Gets the memberId property value. Indicates the identifier of the user.
     * @return string|null
    */
    public function getMemberId(): ?string {
        return $this->memberId;
    }

    /**
     * Gets the outlierContainerType property value. The outlierContainerType property
     * @return OutlierContainerType|null
    */
    public function getOutlierContainerType(): ?OutlierContainerType {
        return $this->outlierContainerType;
    }

    /**
     * Gets the outlierMemberType property value. The outlierMemberType property
     * @return OutlierMemberType|null
    */
    public function getOutlierMemberType(): ?OutlierMemberType {
        return $this->outlierMemberType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('container', $this->container);
        $writer->writeStringValue('containerId', $this->containerId);
        $writer->writeObjectValue('member', $this->member);
        $writer->writeStringValue('memberId', $this->memberId);
        $writer->writeEnumValue('outlierContainerType', $this->outlierContainerType);
        $writer->writeEnumValue('outlierMemberType', $this->outlierMemberType);
    }

    /**
     * Sets the container property value. Navigation link to the container directory object. For example, to a group.
     *  @param DirectoryObject|null $value Value to set for the container property.
    */
    public function setContainer(?DirectoryObject $value ): void {
        $this->container = $value;
    }

    /**
     * Sets the containerId property value. Indicates the identifier of the container, for example, a group ID.
     *  @param string|null $value Value to set for the containerId property.
    */
    public function setContainerId(?string $value ): void {
        $this->containerId = $value;
    }

    /**
     * Sets the member property value. Navigation link to a member object. For example, to a user.
     *  @param DirectoryObject|null $value Value to set for the member property.
    */
    public function setMember(?DirectoryObject $value ): void {
        $this->member = $value;
    }

    /**
     * Sets the memberId property value. Indicates the identifier of the user.
     *  @param string|null $value Value to set for the memberId property.
    */
    public function setMemberId(?string $value ): void {
        $this->memberId = $value;
    }

    /**
     * Sets the outlierContainerType property value. The outlierContainerType property
     *  @param OutlierContainerType|null $value Value to set for the outlierContainerType property.
    */
    public function setOutlierContainerType(?OutlierContainerType $value ): void {
        $this->outlierContainerType = $value;
    }

    /**
     * Sets the outlierMemberType property value. The outlierMemberType property
     *  @param OutlierMemberType|null $value Value to set for the outlierMemberType property.
    */
    public function setOutlierMemberType(?OutlierMemberType $value ): void {
        $this->outlierMemberType = $value;
    }

}
