<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeploymentAudience extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeploymentAudience and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentAudience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentAudience {
        return new DeploymentAudience();
    }

    /**
     * Gets the applicableContent property value. Content eligible to deploy to devices in the audience. Not nullable. Read-only.
     * @return array<ApplicableContent>|null
    */
    public function getApplicableContent(): ?array {
        $val = $this->getBackingStore()->get('applicableContent');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicableContent::class);
            /** @var array<ApplicableContent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableContent'");
    }

    /**
     * Gets the exclusions property value. Specifies the assets to exclude from the audience.
     * @return array<UpdatableAsset>|null
    */
    public function getExclusions(): ?array {
        $val = $this->getBackingStore()->get('exclusions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UpdatableAsset::class);
            /** @var array<UpdatableAsset>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exclusions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableContent' => fn(ParseNode $n) => $o->setApplicableContent($n->getCollectionOfObjectValues([ApplicableContent::class, 'createFromDiscriminatorValue'])),
            'exclusions' => fn(ParseNode $n) => $o->setExclusions($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the members property value. Specifies the assets to include in the audience.
     * @return array<UpdatableAsset>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UpdatableAsset::class);
            /** @var array<UpdatableAsset>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applicableContent', $this->getApplicableContent());
        $writer->writeCollectionOfObjectValues('exclusions', $this->getExclusions());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
    }

    /**
     * Sets the applicableContent property value. Content eligible to deploy to devices in the audience. Not nullable. Read-only.
     * @param array<ApplicableContent>|null $value Value to set for the applicableContent property.
    */
    public function setApplicableContent(?array $value): void {
        $this->getBackingStore()->set('applicableContent', $value);
    }

    /**
     * Sets the exclusions property value. Specifies the assets to exclude from the audience.
     * @param array<UpdatableAsset>|null $value Value to set for the exclusions property.
    */
    public function setExclusions(?array $value): void {
        $this->getBackingStore()->set('exclusions', $value);
    }

    /**
     * Sets the members property value. Specifies the assets to include in the audience.
     * @param array<UpdatableAsset>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

}
