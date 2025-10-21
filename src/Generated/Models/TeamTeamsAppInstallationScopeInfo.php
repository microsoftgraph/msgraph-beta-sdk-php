<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamTeamsAppInstallationScopeInfo extends TeamsAppInstallationScopeInfo implements Parsable 
{
    /**
     * Instantiates a new TeamTeamsAppInstallationScopeInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamTeamsAppInstallationScopeInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamTeamsAppInstallationScopeInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamTeamsAppInstallationScopeInfo {
        return new TeamTeamsAppInstallationScopeInfo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the teamId property value. The teamId property
     * @return string|null
    */
    public function getTeamId(): ?string {
        $val = $this->getBackingStore()->get('teamId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('teamId', $this->getTeamId());
    }

    /**
     * Sets the teamId property value. The teamId property
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->getBackingStore()->set('teamId', $value);
    }

}
