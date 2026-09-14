<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManualAlert extends Alert implements Parsable 
{
    /**
     * Instantiates a new ManualAlert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManualAlert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManualAlert {
        return new ManualAlert();
    }

    /**
     * Gets the entityDefinitions property value. The entities associated with the alert. Each item specifies a security entity (such as a user, device, or IP address), its identifier, and its role in the alert context.
     * @return array<EntityDefinitionInput>|null
    */
    public function getEntityDefinitions(): ?array {
        $val = $this->getBackingStore()->get('entityDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EntityDefinitionInput::class);
            /** @var array<EntityDefinitionInput>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityDefinitions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entityDefinitions' => fn(ParseNode $n) => $o->setEntityDefinitions($n->getCollectionOfObjectValues([EntityDefinitionInput::class, 'createFromDiscriminatorValue'])),
            'isExcludedFromCorrelation' => fn(ParseNode $n) => $o->setIsExcludedFromCorrelation($n->getBooleanValue()),
            'linkToIncident' => fn(ParseNode $n) => $o->setLinkToIncident($n->getIntegerValue()),
            'sentinelWorkspace' => fn(ParseNode $n) => $o->setSentinelWorkspace($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isExcludedFromCorrelation property value. When true, excludes the alert from automatic correlation. Default is false.
     * @return bool|null
    */
    public function getIsExcludedFromCorrelation(): ?bool {
        $val = $this->getBackingStore()->get('isExcludedFromCorrelation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isExcludedFromCorrelation'");
    }

    /**
     * Gets the linkToIncident property value. ID of an existing incident to link to. If not provided, a new incident is created automatically.
     * @return int|null
    */
    public function getLinkToIncident(): ?int {
        $val = $this->getBackingStore()->get('linkToIncident');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkToIncident'");
    }

    /**
     * Gets the sentinelWorkspace property value. Sentinel workspace identifier for workspace routing.
     * @return string|null
    */
    public function getSentinelWorkspace(): ?string {
        $val = $this->getBackingStore()->get('sentinelWorkspace');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentinelWorkspace'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('entityDefinitions', $this->getEntityDefinitions());
        $writer->writeBooleanValue('isExcludedFromCorrelation', $this->getIsExcludedFromCorrelation());
        $writer->writeIntegerValue('linkToIncident', $this->getLinkToIncident());
        $writer->writeStringValue('sentinelWorkspace', $this->getSentinelWorkspace());
    }

    /**
     * Sets the entityDefinitions property value. The entities associated with the alert. Each item specifies a security entity (such as a user, device, or IP address), its identifier, and its role in the alert context.
     * @param array<EntityDefinitionInput>|null $value Value to set for the entityDefinitions property.
    */
    public function setEntityDefinitions(?array $value): void {
        $this->getBackingStore()->set('entityDefinitions', $value);
    }

    /**
     * Sets the isExcludedFromCorrelation property value. When true, excludes the alert from automatic correlation. Default is false.
     * @param bool|null $value Value to set for the isExcludedFromCorrelation property.
    */
    public function setIsExcludedFromCorrelation(?bool $value): void {
        $this->getBackingStore()->set('isExcludedFromCorrelation', $value);
    }

    /**
     * Sets the linkToIncident property value. ID of an existing incident to link to. If not provided, a new incident is created automatically.
     * @param int|null $value Value to set for the linkToIncident property.
    */
    public function setLinkToIncident(?int $value): void {
        $this->getBackingStore()->set('linkToIncident', $value);
    }

    /**
     * Sets the sentinelWorkspace property value. Sentinel workspace identifier for workspace routing.
     * @param string|null $value Value to set for the sentinelWorkspace property.
    */
    public function setSentinelWorkspace(?string $value): void {
        $this->getBackingStore()->set('sentinelWorkspace', $value);
    }

}
