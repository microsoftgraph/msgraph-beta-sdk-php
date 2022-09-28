<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminReportSettings extends Entity implements Parsable 
{
    /**
     * @var bool|null $displayConcealedNames If set to true, all reports will conceal user information such as usernames, groups, and sites. If false, all reports will show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
    */
    private ?bool $displayConcealedNames = null;
    
    /**
     * Instantiates a new AdminReportSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.adminReportSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminReportSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminReportSettings {
        return new AdminReportSettings();
    }

    /**
     * Gets the displayConcealedNames property value. If set to true, all reports will conceal user information such as usernames, groups, and sites. If false, all reports will show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
     * @return bool|null
    */
    public function getDisplayConcealedNames(): ?bool {
        return $this->displayConcealedNames;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayConcealedNames' => function (ParseNode $n) use ($o) { $o->setDisplayConcealedNames($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('displayConcealedNames', $this->displayConcealedNames);
    }

    /**
     * Sets the displayConcealedNames property value. If set to true, all reports will conceal user information such as usernames, groups, and sites. If false, all reports will show identifiable information. This property represents a setting in the Microsoft 365 admin center. Required.
     *  @param bool|null $value Value to set for the displayConcealedNames property.
    */
    public function setDisplayConcealedNames(?bool $value ): void {
        $this->displayConcealedNames = $value;
    }

}
