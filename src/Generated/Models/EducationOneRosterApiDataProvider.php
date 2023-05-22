<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationOneRosterApiDataProvider extends EducationSynchronizationDataProvider implements Parsable 
{
    /**
     * Instantiates a new EducationOneRosterApiDataProvider and sets the default values.
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
        return $this->getBackingStore()->get('connectionSettings');
    }

    /**
     * Gets the connectionUrl property value. The connection URL to the OneRoster instance.
     * @return string|null
    */
    public function getConnectionUrl(): ?string {
        return $this->getBackingStore()->get('connectionUrl');
    }

    /**
     * Gets the customizations property value. Optional customization to be applied to the synchronization profile.
     * @return EducationSynchronizationCustomizations|null
    */
    public function getCustomizations(): ?EducationSynchronizationCustomizations {
        return $this->getBackingStore()->get('customizations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectionSettings' => fn(ParseNode $n) => $o->setConnectionSettings($n->getObjectValue([EducationSynchronizationConnectionSettings::class, 'createFromDiscriminatorValue'])),
            'connectionUrl' => fn(ParseNode $n) => $o->setConnectionUrl($n->getStringValue()),
            'customizations' => fn(ParseNode $n) => $o->setCustomizations($n->getObjectValue([EducationSynchronizationCustomizations::class, 'createFromDiscriminatorValue'])),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'schoolsIds' => fn(ParseNode $n) => $o->setSchoolsIds($n->getCollectionOfPrimitiveValues()),
            'termIds' => fn(ParseNode $n) => $o->setTermIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the providerName property value. The OneRoster Service Provider name as defined by the [OneRoster specification][oneroster].
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->getBackingStore()->get('providerName');
    }

    /**
     * Gets the schoolsIds property value. The list of [School/Org][orgs] sourcedId to sync.
     * @return array<string>|null
    */
    public function getSchoolsIds(): ?array {
        return $this->getBackingStore()->get('schoolsIds');
    }

    /**
     * Gets the termIds property value. The list of [academic sessions][terms] to sync.
     * @return array<string>|null
    */
    public function getTermIds(): ?array {
        return $this->getBackingStore()->get('termIds');
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
