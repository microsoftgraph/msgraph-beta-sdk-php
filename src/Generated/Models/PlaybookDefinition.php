<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A predefined playbook available to the caller. id is a service-generated, persisted GUID string; uniqueName preserves its backend catalog name. Sessions reference this first-class catalog entity through playbookDefinition@odata.bind.
*/
class PlaybookDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlaybookDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlaybookDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlaybookDefinition {
        return new PlaybookDefinition();
    }

    /**
     * Gets the acceptedInputTypes property value. The input kinds accepted by this playbook. The possible values are: defenderIncidentId, defenderAlertId, defenderThreatIntelligenceId, azureSubscriptionId, azureIdentityId, keyword, unknownFutureValue. unknownFutureValue isn't a valid value when creating a session. Read-only.
     * @return array<InvestigationInputType>|null
    */
    public function getAcceptedInputTypes(): ?array {
        $val = $this->getBackingStore()->get('acceptedInputTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InvestigationInputType::class);
            /** @var array<InvestigationInputType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptedInputTypes'");
    }

    /**
     * Gets the description property value. The description of the work performed by the playbook. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The human-readable name of the playbook. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedInputTypes' => fn(ParseNode $n) => $o->setAcceptedInputTypes($n->getCollectionOfEnumValues(InvestigationInputType::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'uniqueName' => fn(ParseNode $n) => $o->setUniqueName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the uniqueName property value. The immutable, unique catalog name, such as investigate-incident. Distinct from id. Alternate-key addressing isn't supported. Read-only.
     * @return string|null
    */
    public function getUniqueName(): ?string {
        $val = $this->getBackingStore()->get('uniqueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('uniqueName', $this->getUniqueName());
    }

    /**
     * Sets the acceptedInputTypes property value. The input kinds accepted by this playbook. The possible values are: defenderIncidentId, defenderAlertId, defenderThreatIntelligenceId, azureSubscriptionId, azureIdentityId, keyword, unknownFutureValue. unknownFutureValue isn't a valid value when creating a session. Read-only.
     * @param array<InvestigationInputType>|null $value Value to set for the acceptedInputTypes property.
    */
    public function setAcceptedInputTypes(?array $value): void {
        $this->getBackingStore()->set('acceptedInputTypes', $value);
    }

    /**
     * Sets the description property value. The description of the work performed by the playbook. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The human-readable name of the playbook. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the uniqueName property value. The immutable, unique catalog name, such as investigate-incident. Distinct from id. Alternate-key addressing isn't supported. Read-only.
     * @param string|null $value Value to set for the uniqueName property.
    */
    public function setUniqueName(?string $value): void {
        $this->getBackingStore()->set('uniqueName', $value);
    }

}
