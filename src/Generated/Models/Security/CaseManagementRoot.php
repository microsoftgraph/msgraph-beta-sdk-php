<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement\CaseTypeConfiguration;
use Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement\EscapedCase;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CaseManagementRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CaseManagementRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseManagementRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseManagementRoot {
        return new CaseManagementRoot();
    }

    /**
     * Gets the cases property value. The collection of security cases managed through the case management entry point. Supports $filter, $orderby, $select, $top, and $skip.
     * @return array<EscapedCase>|null
    */
    public function getCases(): ?array {
        $val = $this->getBackingStore()->get('cases');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EscapedCase::class);
            /** @var array<EscapedCase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cases'");
    }

    /**
     * Gets the caseTypeConfigurations property value. The collection of case type configurations that define the statuses and custom fields available for each case type. Read-only. Supports $select, $count, and $expand of the statuses and customFields relationships.
     * @return array<CaseTypeConfiguration>|null
    */
    public function getCaseTypeConfigurations(): ?array {
        $val = $this->getBackingStore()->get('caseTypeConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CaseTypeConfiguration::class);
            /** @var array<CaseTypeConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'caseTypeConfigurations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cases' => fn(ParseNode $n) => $o->setCases($n->getCollectionOfObjectValues([EscapedCase::class, 'createFromDiscriminatorValue'])),
            'caseTypeConfigurations' => fn(ParseNode $n) => $o->setCaseTypeConfigurations($n->getCollectionOfObjectValues([CaseTypeConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('cases', $this->getCases());
        $writer->writeCollectionOfObjectValues('caseTypeConfigurations', $this->getCaseTypeConfigurations());
    }

    /**
     * Sets the cases property value. The collection of security cases managed through the case management entry point. Supports $filter, $orderby, $select, $top, and $skip.
     * @param array<EscapedCase>|null $value Value to set for the cases property.
    */
    public function setCases(?array $value): void {
        $this->getBackingStore()->set('cases', $value);
    }

    /**
     * Sets the caseTypeConfigurations property value. The collection of case type configurations that define the statuses and custom fields available for each case type. Read-only. Supports $select, $count, and $expand of the statuses and customFields relationships.
     * @param array<CaseTypeConfiguration>|null $value Value to set for the caseTypeConfigurations property.
    */
    public function setCaseTypeConfigurations(?array $value): void {
        $this->getBackingStore()->set('caseTypeConfigurations', $value);
    }

}
