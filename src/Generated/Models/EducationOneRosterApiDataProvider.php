<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationOneRosterApiDataProvider extends EducationSynchronizationDataProvider implements Parsable 
{
    /**
     * Instantiates a new educationOneRosterApiDataProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationOneRosterApiDataProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationOneRosterApiDataProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationOneRosterApiDataProvider {
        return new EducationOneRosterApiDataProvider();
    }

    /**
     * Gets the connectionSettings property value. The connectionSettings property
     * @return EducationSynchronizationConnectionSettings|null
    */
    public function getConnectionSettings(): ?EducationSynchronizationConnectionSettings {
        $val = $this->getBackingStore()->get('connectionSettings');
        if (is_null($val) || $val instanceof EducationSynchronizationConnectionSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionSettings'");
    }

    /**
     * Gets the connectionUrl property value. The connection URL to the OneRoster instance.
     * @return string|null
    */
    public function getConnectionUrl(): ?string {
        $val = $this->getBackingStore()->get('connectionUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionUrl'");
    }

    /**
     * Gets the customizations property value. Optional customization to be applied to the synchronization profile.
     * @return EducationSynchronizationCustomizations|null
    */
    public function getCustomizations(): ?EducationSynchronizationCustomizations {
        $val = $this->getBackingStore()->get('customizations');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomizations) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customizations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectionSettings' => fn(ParseNode $n) => $o->setConnectionSettings($n->getObjectValue([EducationSynchronizationConnectionSettings::class, 'createFromDiscriminatorValue'])),
            'connectionUrl' => fn(ParseNode $n) => $o->setConnectionUrl($n->getStringValue()),
            'customizations' => fn(ParseNode $n) => $o->setCustomizations($n->getObjectValue([EducationSynchronizationCustomizations::class, 'createFromDiscriminatorValue'])),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'schoolsIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSchoolsIds($val);
            },
            'termIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTermIds($val);
            },
        ]);
    }

    /**
     * Gets the providerName property value. The OneRoster Service Provider name as defined by the [OneRoster specification][oneroster].
     * @return string|null
    */
    public function getProviderName(): ?string {
        $val = $this->getBackingStore()->get('providerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerName'");
    }

    /**
     * Gets the schoolsIds property value. The list of [School/Org][orgs] sourcedId to sync.
     * @return array<string>|null
    */
    public function getSchoolsIds(): ?array {
        $val = $this->getBackingStore()->get('schoolsIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schoolsIds'");
    }

    /**
     * Gets the termIds property value. The list of [academic sessions][terms] to sync.
     * @return array<string>|null
    */
    public function getTermIds(): ?array {
        $val = $this->getBackingStore()->get('termIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('connectionSettings', $this->getConnectionSettings());
        $writer->writeStringValue('connectionUrl', $this->getConnectionUrl());
        $writer->writeObjectValue('customizations', $this->getCustomizations());
        $writer->writeStringValue('providerName', $this->getProviderName());
        $writer->writeCollectionOfPrimitiveValues('schoolsIds', $this->getSchoolsIds());
        $writer->writeCollectionOfPrimitiveValues('termIds', $this->getTermIds());
    }

    /**
     * Sets the connectionSettings property value. The connectionSettings property
     * @param EducationSynchronizationConnectionSettings|null $value Value to set for the connectionSettings property.
    */
    public function setConnectionSettings(?EducationSynchronizationConnectionSettings $value): void {
        $this->getBackingStore()->set('connectionSettings', $value);
    }

    /**
     * Sets the connectionUrl property value. The connection URL to the OneRoster instance.
     * @param string|null $value Value to set for the connectionUrl property.
    */
    public function setConnectionUrl(?string $value): void {
        $this->getBackingStore()->set('connectionUrl', $value);
    }

    /**
     * Sets the customizations property value. Optional customization to be applied to the synchronization profile.
     * @param EducationSynchronizationCustomizations|null $value Value to set for the customizations property.
    */
    public function setCustomizations(?EducationSynchronizationCustomizations $value): void {
        $this->getBackingStore()->set('customizations', $value);
    }

    /**
     * Sets the providerName property value. The OneRoster Service Provider name as defined by the [OneRoster specification][oneroster].
     * @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value): void {
        $this->getBackingStore()->set('providerName', $value);
    }

    /**
     * Sets the schoolsIds property value. The list of [School/Org][orgs] sourcedId to sync.
     * @param array<string>|null $value Value to set for the schoolsIds property.
    */
    public function setSchoolsIds(?array $value): void {
        $this->getBackingStore()->set('schoolsIds', $value);
    }

    /**
     * Sets the termIds property value. The list of [academic sessions][terms] to sync.
     * @param array<string>|null $value Value to set for the termIds property.
    */
    public function setTermIds(?array $value): void {
        $this->getBackingStore()->set('termIds', $value);
    }

}
